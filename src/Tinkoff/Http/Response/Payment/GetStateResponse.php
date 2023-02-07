<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class GetStateResponse extends ResponseAbstract
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
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string $terminalKey
     * @return GetStateResponse
     */
    public function setTerminalKey(string $terminalKey): GetStateResponse
    {
        $this->terminalKey = $terminalKey;

        return $this;
    }

    /**
     * @param int $amount
     * @return GetStateResponse
     */
    public function setAmount(int $amount): GetStateResponse
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param string $orderId
     * @return GetStateResponse
     */
    public function setOrderId(string $orderId): GetStateResponse
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param string $status
     * @return GetStateResponse
     */
    public function setStatus(string $status): GetStateResponse
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $paymentId
     * @return GetStateResponse
     */
    public function setPaymentId(string $paymentId): GetStateResponse
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @param string|null $details
     * @return GetStateResponse
     */
    public function setDetails(?string $details): GetStateResponse
    {
        $this->details = $details;

        return $this;
    }
}
