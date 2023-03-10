<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод возвращает текущий статус платежа.
 */
class GetStateRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'GetState';
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
     * IP-адрес покупателя
     *
     * @param string $value
     * @return void
     */
    public function setIp(string $value): void
    {
        $this->setParameter('IP', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token');
    }
}
