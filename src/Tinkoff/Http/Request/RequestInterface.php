<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request;

use Tinkoff\Http\Response\ResponseInterface;

interface RequestInterface
{
    public function send(): ResponseInterface;
}
