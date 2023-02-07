<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class Submit3DSAuthorizationResponse extends ResponseAbstract
{
    private string $terminalKey;

    private int $amount;

    private string $orderId;

    private string $status;

    private string $paymentId;

    private ?string $details = null;

    private ?string $rebillId = null;

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
     * @return Submit3DSAuthorizationResponse
     */
    public function setTerminalKey(string $terminalKey): Submit3DSAuthorizationResponse
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setAmount(int $amount): Submit3DSAuthorizationResponse
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setOrderId(string $orderId): Submit3DSAuthorizationResponse
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setStatus(string $status): Submit3DSAuthorizationResponse
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setPaymentId(string $paymentId): Submit3DSAuthorizationResponse
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setDetails(?string $details): Submit3DSAuthorizationResponse
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRebillId(): ?string
    {
        return $this->rebillId;
    }

    /**
     * @param string|null $rebillId
     * @return Submit3DSAuthorizationResponse
     */
    public function setRebillId(?string $rebillId): Submit3DSAuthorizationResponse
    {
        $this->rebillId = $rebillId;
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
     * @return Submit3DSAuthorizationResponse
     */
    public function setCardId(?string $cardId): Submit3DSAuthorizationResponse
    {
        $this->cardId = $cardId;
        return $this;
    }
}
