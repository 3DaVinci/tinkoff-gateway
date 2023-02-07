<?php

declare(strict_types=1);

use Tinkoff\Http\Response\ResponseAbstract;

class AddAccountQrResponse extends ResponseAbstract
{
    private string $terminalKey;

    private string $data;

    private string $requestKey;

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @param string $terminalKey
     * @return AddAccountQrResponse
     */
    public function setTerminalKey(string $terminalKey): AddAccountQrResponse
    {
        $this->terminalKey = $terminalKey;
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
     * @return AddAccountQrResponse
     */
    public function setData(string $data): AddAccountQrResponse
    {
        $this->data = $data;
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
     * @return AddAccountQrResponse
     */
    public function setRequestKey(string $requestKey): AddAccountQrResponse
    {
        $this->requestKey = $requestKey;
        return $this;
    }
}
