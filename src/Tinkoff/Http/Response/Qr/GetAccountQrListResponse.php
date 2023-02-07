<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class GetAccountQrListResponse extends ResponseAbstract
{
    private string $requestKey;

    private string $status;

    private string $accountToken;

    private string $bankMemberId;

    private string $bankMemberName;

    /**
     * @return string
     */
    public function getRequestKey(): string
    {
        return $this->requestKey;
    }

    /**
     * @param string $requestKey
     * @return GetAccountQrListResponse
     */
    public function setRequestKey(string $requestKey): GetAccountQrListResponse
    {
        $this->requestKey = $requestKey;
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
     * @return GetAccountQrListResponse
     */
    public function setStatus(string $status): GetAccountQrListResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountToken(): string
    {
        return $this->accountToken;
    }

    /**
     * @param string $accountToken
     * @return GetAccountQrListResponse
     */
    public function setAccountToken(string $accountToken): GetAccountQrListResponse
    {
        $this->accountToken = $accountToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankMemberId(): string
    {
        return $this->bankMemberId;
    }

    /**
     * @param string $bankMemberId
     * @return GetAccountQrListResponse
     */
    public function setBankMemberId(string $bankMemberId): GetAccountQrListResponse
    {
        $this->bankMemberId = $bankMemberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankMemberName(): string
    {
        return $this->bankMemberName;
    }

    /**
     * @param string $bankMemberName
     * @return GetAccountQrListResponse
     */
    public function setBankMemberName(string $bankMemberName): GetAccountQrListResponse
    {
        $this->bankMemberName = $bankMemberName;
        return $this;
    }
}
