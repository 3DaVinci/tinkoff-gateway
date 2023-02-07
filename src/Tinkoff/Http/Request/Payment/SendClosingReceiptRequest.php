<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Entity\Receipt;
use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод позволяет отправить закрывающий чек в кассу.
 * Условия работы метода:
 * 1. Закрывающий чек может быть отправлен если платежная сессия по первому чеку находится в статусе CONFIRMED.
 * 2. В платежной сессии был передан объект Receipt.
 * 3. В объекте Receipt был передан хотя бы один объект Receipt.Items.PaymentMethod = "full_prepayment" или "prepayment" или "advance"
 */
class SendClosingReceiptRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'SendClosingReceipt';
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
        parent::validate('TerminalKey', 'PaymentId', 'Receipt', 'Token');
    }
}
