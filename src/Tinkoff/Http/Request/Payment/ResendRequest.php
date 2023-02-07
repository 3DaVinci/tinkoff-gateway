<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод позволяет переотправить неуспешные нотификации в течение 24 часов с момента попадания в архив.
 */
class ResendRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'Resend';
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'Token');
    }
}
