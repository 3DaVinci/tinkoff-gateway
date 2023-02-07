<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class InitResponse extends ResponseAbstract
{
    private string $terminalKey;

    private int $amount;

    private string $orderId;

    private ?string $status = null;

    private string $paymentId;

    private ?string $paymentURL = null;

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
     * @return string|null
     */
    public function getStatus(): ?string
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
    public function getPaymentURL(): ?string
    {
        return $this->paymentURL;
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
     * @return InitResponse
     */
    public function setTerminalKey(string $terminalKey): InitResponse
    {
        $this->terminalKey = $terminalKey;
        return $this;
    }

    /**
     * @param int $amount
     * @return InitResponse
     */
    public function setAmount(int $amount): InitResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $orderId
     * @return InitResponse
     */
    public function setOrderId(string $orderId): InitResponse
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param string|null $status
     * @return InitResponse
     */
    public function setStatus(?string $status): InitResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $paymentId
     * @return InitResponse
     */
    public function setPaymentId(string $paymentId): InitResponse
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @param string|null $paymentURL
     * @return InitResponse
     */
    public function setPaymentURL(?string $paymentURL): InitResponse
    {
        $this->paymentURL = $paymentURL;
        return $this;
    }

    /**
     * @param string|null $details
     * @return InitResponse
     */
    public function setDetails(?string $details): InitResponse
    {
        $this->details = $details;
        return $this;
    }
}
