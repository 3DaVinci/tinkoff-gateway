<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class ConfirmResponse extends ResponseAbstract
{
    private string $terminalKey;

    private int $amount;

    private string $orderId;

    private string $status;

    private string $paymentId;

    private ?string $details = null;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return ConfirmResponse
     */
    public function setTerminalKey(string $terminalKey): ConfirmResponse
    {
        $this->terminalKey = $terminalKey;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return ConfirmResponse
     */
    public function setAmount(int $amount): ConfirmResponse
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ConfirmResponse
     */
    public function setOrderId(string $orderId): ConfirmResponse
    {
        $this->orderId = $orderId;

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
     * @return ConfirmResponse
     */
    public function setStatus(string $status): ConfirmResponse
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return ConfirmResponse
     */
    public function setPaymentId(string $paymentId): ConfirmResponse
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string|null $details
     * @return ConfirmResponse
     */
    public function setDetails(?string $details): ConfirmResponse
    {
        $this->details = $details;

        return $this;
    }
}
