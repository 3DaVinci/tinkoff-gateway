<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class FinishAuthorizeResponse extends ResponseAbstract
{
    private string $terminalKey;

    private int $amount;

    private string $orderId;

    private string $status;

    private string $paymentId;

    private ?string $details = null;

    private ?string $cardId = null;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return FinishAuthorizeResponse
     */
    public function setTerminalKey(string $terminalKey): FinishAuthorizeResponse
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
     * @return FinishAuthorizeResponse
     */
    public function setAmount(int $amount): FinishAuthorizeResponse
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
     * @return FinishAuthorizeResponse
     */
    public function setOrderId(string $orderId): FinishAuthorizeResponse
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
     * @return FinishAuthorizeResponse
     */
    public function setStatus(string $status): FinishAuthorizeResponse
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
     * @return FinishAuthorizeResponse
     */
    public function setPaymentId(string $paymentId): FinishAuthorizeResponse
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
     * @return FinishAuthorizeResponse
     */
    public function setDetails(?string $details): FinishAuthorizeResponse
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    /**
     * @param string|null $cardId
     * @return FinishAuthorizeResponse
     */
    public function setCardId(?string $cardId): FinishAuthorizeResponse
    {
        $this->cardId = $cardId;
        return $this;
    }
}
