<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response;

abstract class ResponseAbstract implements ResponseInterface
{
    protected bool $success;

    protected string $errorCode;

    protected ?string $message = null;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $name => $value) {
            $method = 'set'.ucfirst($name);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param bool $success
     * @return ResponseAbstract
     */
    public function setSuccess(bool $success): ResponseAbstract
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @param string $errorCode
     * @return ResponseAbstract
     */
    public function setErrorCode(string $errorCode): ResponseAbstract
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @param string|null $message
     * @return ResponseAbstract
     */
    public function setMessage(?string $message): ResponseAbstract
    {
        $this->message = $message;

        return $this;
    }
}
