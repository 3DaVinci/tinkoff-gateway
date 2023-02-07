<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class GetAddAccountQrStateRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'GetAddAccountQrState';
    }

    /**
     * Идентификатор запроса на привязку счета
     *
     * @param string $value
     * @return void
     */
    public function setRequestKey(string $value): void
    {
        $this->setParameter('RequestKey', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'RequestKey', 'Token');
    }
}
