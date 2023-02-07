<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class Payment extends ResponseAbstract
{
    private string $paymentId;

    private ?int $amount = null;

    private string $status;

    private ?string $rrn = null;

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return Payment
     */
    public function setPaymentId(string $paymentId): Payment
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     * @return Payment
     */
    public function setAmount(?int $amount): Payment
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Payment
     */
    public function setStatus(string $status): Payment
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRrn(): ?string
    {
        return $this->rrn;
    }

    /**
     * @param string|null $rrn
     * @return Payment
     */
    public function setRrn(?string $rrn): Payment
    {
        $this->rrn = $rrn;
        return $this;
    }
}
