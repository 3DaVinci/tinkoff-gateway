<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class QrMembersListRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'QrMembersList';
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

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token');
    }
}
