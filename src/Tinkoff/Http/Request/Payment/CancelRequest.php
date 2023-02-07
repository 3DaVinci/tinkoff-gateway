<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Entity\Receipt;
use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод отменяет платеж.
 */
class CancelRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'Cancel';
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

    /**
     * Сумма в копейках
     *
     * @param string $value
     * @return void
     */
    public function setAmount(string $value): void
    {
        $this->setParameter('Amount', $value);
    }

    /**
     * Массив данных чека.
     *
     * @param Receipt $value
     * @return void
     */
    public function setReceipt(Receipt $value): void
    {
        $this->setParameter('Receipt', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token');
    }
}
