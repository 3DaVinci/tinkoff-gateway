<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class CancelResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $orderId;

    private string $status;

    private string $paymentId;

    private ?string $details = null;

    private int $originalAmount;

    private int $newAmount;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return CancelResponse
     */
    public function setTerminalKey(string $terminalKey): CancelResponse
    {
        $this->terminalKey = $terminalKey;
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
     * @return CancelResponse
     */
    public function setOrderId(string $orderId): CancelResponse
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
     * @return CancelResponse
     */
    public function setStatus(string $status): CancelResponse
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
     * @return CancelResponse
     */
    public function setPaymentId(string $paymentId): CancelResponse
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
     * @return CancelResponse
     */
    public function setDetails(?string $details): CancelResponse
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginalAmount(): int
    {
        return $this->originalAmount;
    }

    /**
     * @param int $originalAmount
     * @return CancelResponse
     */
    public function setOriginalAmount(int $originalAmount): CancelResponse
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getNewAmount(): int
    {
        return $this->newAmount;
    }

    /**
     * @param int $newAmount
     * @return CancelResponse
     */
    public function setNewAmount(int $newAmount): CancelResponse
    {
        $this->newAmount = $newAmount;
        return $this;
    }
}
