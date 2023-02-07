<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class GetAccountQrListRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'GetAccountQrList';
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'Token');
    }
}
