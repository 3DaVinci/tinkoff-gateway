<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class GetQrResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $orderId;

    private string $paymentId;

    private string $data;

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
     * @return GetQrResponse
     */
    public function setTerminalKey(string $terminalKey): GetQrResponse
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
     * @return GetQrResponse
     */
    public function setOrderId(string $orderId): GetQrResponse
    {
        $this->orderId = $orderId;
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
     * @return GetQrResponse
     */
    public function setPaymentId(string $paymentId): GetQrResponse
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return GetQrResponse
     */
    public function setData(string $data): GetQrResponse
    {
        $this->data = $data;
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
     * @return GetQrResponse
     */
    public function setDetails(?string $details): GetQrResponse
    {
        $this->details = $details;
        return $this;
    }
}
