<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class GetAddAccountQrStateResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $requestKey;

    private bool $status;

    private ?string $bankMemberId = null;

    private ?string $bankMemberName = null;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return GetAddAccountQrStateResponse
     */
    public function setTerminalKey(string $terminalKey): GetAddAccountQrStateResponse
    {
        $this->terminalKey = $terminalKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestKey(): string
    {
        return $this->requestKey;
    }

    /**
     * @param string $requestKey
     * @return GetAddAccountQrStateResponse
     */
    public function setRequestKey(string $requestKey): GetAddAccountQrStateResponse
    {
        $this->requestKey = $requestKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return GetAddAccountQrStateResponse
     */
    public function setStatus(bool $status): GetAddAccountQrStateResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankMemberId(): ?string
    {
        return $this->bankMemberId;
    }

    /**
     * @param string|null $bankMemberId
     * @return GetAddAccountQrStateResponse
     */
    public function setBankMemberId(?string $bankMemberId): GetAddAccountQrStateResponse
    {
        $this->bankMemberId = $bankMemberId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankMemberName(): ?string
    {
        return $this->bankMemberName;
    }

    /**
     * @param string|null $bankMemberName
     * @return GetAddAccountQrStateResponse
     */
    public function setBankMemberName(?string $bankMemberName): GetAddAccountQrStateResponse
    {
        $this->bankMemberName = $bankMemberName;
        return $this;
    }
}
