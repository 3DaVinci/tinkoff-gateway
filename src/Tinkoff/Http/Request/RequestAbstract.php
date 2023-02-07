<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request;

use Payment;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Tinkoff\Config\Config;
use Tinkoff\Exception\ValidateRequestException;
use Tinkoff\Http\Response\ResponseInterface;

abstract class RequestAbstract implements RequestInterface
{
    protected array $parameters = [];

    protected ?ResponseInterface $response = null;

    protected string $responseClassName;

    protected HttpClientInterface $client;

    protected Config $config;

    abstract public function getMethodName();

    public function __construct(
        HttpClientInterface $client,
        Config $config,
        string $responseClassName = '\Tinkoff\Http\RestResponse'
    )
    {
        $this->client = $client;
        $this->config = $config;
        $this->responseClassName = $responseClassName;
    }

    public function initialize(array $parameters): void
    {
        foreach ($parameters as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        $this->setTerminalKey();
        $this->setToken();

        $this->validate();
    }

    /**
     * Идентификатор терминала. Выдается продавцу банком при заведении терминала
     *
     * @return void
     */
    public function setTerminalKey(): void
    {
        $this->setParameter('TerminalKey', $this->config->getTerminalKey());
    }

    /**
     * Подпись запроса
     *
     * @return void
     */
    public function setToken(): void
    {
        $token = $this->config->getPassword();
        foreach ($this->getParameters() as $param) {
            $token .= $param;
        }
        $token = hash('sha256', $token);
        $this->setParameter('Token', $token);
    }

    protected function validate()
    {
        $parameters = func_get_args();
        foreach ($parameters as $key) {
            if (! isset($this->parameters[$key]) || empty($this->parameters[$key])) {
                throw new ValidateRequestException($key);
            }
        }
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    protected function getParameter(string $key)
    {
        return $this->parameters[$key] ?? null;
    }

    protected function setParameter(string $key, $value): void
    {
        $this->parameters[$key] = $value;
    }

    public function send(): ResponseInterface
    {
        $httpResponse = $this->client->request(
            'POST',
            $this->getMethodName(),
            [
                'json' => $this->getParameters()
            ],
        );

        $content = $httpResponse->toArray();
        $responseClassName = $this->responseClassName;
        if ($httpResponse->getStatusCode() !== 200) {
            throw new \Exception();
        }
        if (isset($content['payments']) && $content['payments']) {
            $payments = [];
            foreach ($content['payments'] as $requestPayment) {
                $payments[] = new Payment($requestPayment);
            }
            $content['payments'] = $payments;
        } else if (isset($content['members']) && $content['members']) {
            $payments = [];
            foreach ($content['members'] as $requestPayment) {
                $payments[] = new Member($requestPayment);
            }
            $content['members'] = $payments;
        }
        $this->response = new $responseClassName($content);

        return $this->response;
    }
}
