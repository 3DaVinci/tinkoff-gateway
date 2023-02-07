<?php

declare(strict_types=1);

namespace Tinkoff\Http\Response;

interface ResponseInterface
{
    public function isSuccess(): bool;

    public function getErrorCode(): string;

    public function getMessage(): ?string;
}
