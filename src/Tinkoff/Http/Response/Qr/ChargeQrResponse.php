<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class ChargeQrResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $orderId;

    private string $status;

    private int $amount;

    private int $currency;

    private string $paymentId;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return ChargeQrResponse
     */
    public function setTerminalKey(string $terminalKey): ChargeQrResponse
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
     * @return ChargeQrResponse
     */
    public function setOrderId(string $orderId): ChargeQrResponse
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
     * @return ChargeQrResponse
     */
    public function setStatus(string $status): ChargeQrResponse
    {
        $this->status = $status;
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
     * @return ChargeQrResponse
     */
    public function setAmount(int $amount): ChargeQrResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrency(): int
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     * @return ChargeQrResponse
     */
    public function setCurrency(int $currency): ChargeQrResponse
    {
        $this->currency = $currency;
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
     * @return ChargeQrResponse
     */
    public function setPaymentId(string $paymentId): ChargeQrResponse
    {
        $this->paymentId = $paymentId;
        return $this;
    }
}
