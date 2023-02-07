<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class CheckOrderResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $orderId;

    private array $payments;

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
     * @return CheckOrderResponse
     */
    public function setTerminalKey(string $terminalKey): CheckOrderResponse
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
     * @return CheckOrderResponse
     */
    public function setOrderId(string $orderId): CheckOrderResponse
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return array
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param array $payments
     * @return CheckOrderResponse
     */
    public function setPayments(array $payments): CheckOrderResponse
    {
        $this->payments = $payments;
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
     * @return CheckOrderResponse
     */
    public function setDetails(?string $details): CheckOrderResponse
    {
        $this->details = $details;
        return $this;
    }
}
