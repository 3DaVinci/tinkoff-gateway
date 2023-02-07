<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class ChargeQrRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'ChargeQr';
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
     * Идентификатор привязки счета, назначаемый Банком Плательщика
     *
     * @param string $value
     * @return void
     */
    public function setAccountToken(string $value): void
    {
        $this->setParameter('AccountToken', $value);
    }

    /**
     * true – если покупатель хочет получать уведомления на почту
     *
     * @param bool $value
     * @return void
     */
    public function setSendEmail(bool $value): void
    {
        $this->setParameter('SendEmail', $value);
    }

    /**
     * Адрес почты покупателя
     *
     * @param string $value
     * @return void
     */
    public function setInfoEmail(string $value): void
    {
        $this->setParameter('InfoEmail', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token', 'AccountToken');
    }
}
