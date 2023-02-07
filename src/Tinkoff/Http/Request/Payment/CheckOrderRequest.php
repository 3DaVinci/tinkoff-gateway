<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод возвращает статус заказа.
 */
class CheckOrderRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'CheckOrder';
    }

    /**
     * Идентификатор заказа в системе продавца
     *
     * @param string $value
     * @return void
     */
    public function setOrderId(string $value): void
    {
        $this->setParameter('OrderId', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'Token', 'OrderId');
    }
}
