<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Http\Request\RequestAbstract;
use Tinkoff\Http\Response\ResponseInterface;

/**
 * Осуществляет проверку результатов прохождения 3-D Secure и при успешном результате прохождения 3-D Secure подтверждает инициированный платеж.
 * При использовании одностадийной оплаты осуществляет списание денежных средств с карты покупателя.
 * При двухстадийной оплате осуществляет блокировку указанной суммы на карте покупателя.
 */
class Submit3DSAuthorizationRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'Submit3DSAuthorization';
    }

    /**
     * Идентификатор платежа в системе банка
     *
     * @param string $value
     * @return void
     */
    public function setPaymentId(string $value): void
    {
        $this->setParameter('PaymentId', $value);
    }

    /**
     * Уникальный идентификатор транзакции в системе Банка
     *
     * @param string $value
     * @return void
     */
    public function setMD(string $value): void
    {
        $this->setParameter('MD', $value);
    }

    /**
     * Шифрованная строка, содержащая результаты 3-D Secure аутентификации
     *
     * @param string $value
     * @return void
     */
    public function setPaRes(string $value): void
    {
        $this->setParameter('PaRes', $value);
    }

    public function validate()
    {
        parent::validate('MD', 'PaRes','TerminalKey', 'PaymentId', 'Token');
    }

    public function send(): ResponseInterface
    {
        $httpResponse = $this->client->request(
            'POST',
            $this->getMethodName(),
            [
                'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
                'body' => $this->getParameters()
            ],
        );

        $content = $httpResponse->toArray();
        $responseClassName = $this->responseClassName;
        if ($httpResponse->getStatusCode() !== 200) {
            throw new \Exception();
        }

        $this->response = new $responseClassName($content);

        return $this->response;
    }
}
