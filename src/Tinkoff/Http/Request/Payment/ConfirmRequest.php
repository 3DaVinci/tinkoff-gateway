<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Entity\Receipt;
use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод подтверждает платеж и списывает ранее заблокированные средства.
 * Используется при двухстадийной оплате. При одностадийной оплате вызывается автоматически.
 * Применим к платежу только в статусе AUTHORIZED и только один раз.
 * Сумма подтверждения не может быть больше заблокированной.
 * Если сумма подтверждения меньше заблокированной, будет выполнено частичное подтверждение.
 */
class ConfirmRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'Confirm';
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
