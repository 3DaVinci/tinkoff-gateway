<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class SbpPayTestRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'SbpPayTest';
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
     * Признак эмуляции отказа проведения платежа Банком по таймауту:
     * false – эмуляция не требуется
     * true – требуется эмуляция (не может быть использован вместе с IsRejected = true)
     *
     * @param bool $value
     * @return void
     */
    public function setIsDeadlineExpired(bool $value): void
    {
        $this->setParameter('IsDeadlineExpired', $value);
    }

    /**
     * Признак эмуляции отказа Банка в проведении платежа:
     * false – эмуляция не требуется
     * true – требуется эмуляция (не может быть использован вместе с IsDeadlineExpired = true)
     * По умолчанию не используется (эмуляция не требуется)
     *
     * @param bool $value
     * @return void
     */
    public function setIsRejected(bool $value): void
    {
        $this->setParameter('IsRejected', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token');
    }
}
