<?php

declare(strict_types=1);

namespace Tinkoff;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Tinkoff\Config\Config;
use Tinkoff\Http\Request\RequestAbstract;
use Tinkoff\Http\Request\RequestInterface;
use Tinkoff\Http\Response\ResponseInterface;

class RestGateway
{
    private const API_URI = 'https://securepay.tinkoff.ru/v2/';
    private const TEST_API_URI = 'https://rest-api-test.tinkoff.ru/v2/';

    private HttpClientInterface $httpClient;

    private Config $config;

    /**
     * @throws Exception\ConfigException
     */
    public function __construct(array $config)
    {
        $url = $config['testMode'] ? self::TEST_API_URI : self::API_URI;
        $this->httpClient = HttpClient::createForBaseUri($url, [
            'headers' => ['Content-Type' => 'application/json']
        ]);
        $this->config = new Config($config);
    }

    public function init(array $parameters): ResponseInterface
    {
        $request = $this->createRequest('Payment\Init', $parameters);

        return $request->send();
    }

    public function getState(array $parameters): ResponseInterface
    {
        $request = $this->createRequest('Payment\GetState', $parameters);

        return $request->send();
    }

    public function getQr(array $parameters): ResponseInterface
    {
        $request = $this->createRequest('Qr\GetQr', $parameters);

        return $request->send();
    }

    private function createRequest(string $className, array $parameters): RequestInterface
    {
        $classRequest = '\Tinkoff\Http\Request\\'.$className.'Request';
        $classResponse = '\Tinkoff\Http\Response\\'.$className.'Response';
        /** @var RequestAbstract $requestObj */
        $requestObj = new $classRequest($this->httpClient, $this->config, $classResponse);
        $requestObj->initialize($parameters);

        return $requestObj;
    }
}
