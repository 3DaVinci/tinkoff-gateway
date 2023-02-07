<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response\Payment;

use Tinkoff\Http\Response\ResponseAbstract;

class ResendResponse extends ResponseAbstract
{
    private string $terminalKey;

    private int $count;

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
     * @return ResendResponse
     */
    public function setTerminalKey(string $terminalKey): ResendResponse
    {
        $this->terminalKey = $terminalKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return ResendResponse
     */
    public function setCount(int $count): ResendResponse
    {
        $this->count = $count;
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
     * @return ResendResponse
     */
    public function setDetails(?string $details): ResendResponse
    {
        $this->details = $details;
        return $this;
    }
}
