<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class GetQrStateResponse extends ResponseAbstract
{
    private ?string $orderId = null;

    private string $status;

    private ?int $amount = null;

    private ?string $qrCancelCode = null;

    private ?string $qrCancelMessage = null;

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     * @return GetQrStateResponse
     */
    public function setOrderId(?string $orderId): GetQrStateResponse
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
     * @return GetQrStateResponse
     */
    public function setStatus(string $status): GetQrStateResponse
    {
        $this->status = $status;
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
     * @return GetQrStateResponse
     */
    public function setAmount(?int $amount): GetQrStateResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQrCancelCode(): ?string
    {
        return $this->qrCancelCode;
    }

    /**
     * @param string|null $qrCancelCode
     * @return GetQrStateResponse
     */
    public function setQrCancelCode(?string $qrCancelCode): GetQrStateResponse
    {
        $this->qrCancelCode = $qrCancelCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQrCancelMessage(): ?string
    {
        return $this->qrCancelMessage;
    }

    /**
     * @param string|null $qrCancelMessage
     * @return GetQrStateResponse
     */
    public function setQrCancelMessage(?string $qrCancelMessage): GetQrStateResponse
    {
        $this->qrCancelMessage = $qrCancelMessage;
        return $this;
    }
}
