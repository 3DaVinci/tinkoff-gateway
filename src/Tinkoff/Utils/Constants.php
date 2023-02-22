<?php

declare(strict_types=1);

namespace Tinkoff\Utils;

final class Constants
{
    public const PAYMENT_STATUS_NEW = 'NEW';
    public const PAYMENT_STATUS_REJECTED = 'REJECTED';
    public const PAYMENT_STATUS_AUTHORIZED = 'AUTHORIZED';
    public const PAYMENT_STATUS_CONFIRMED = 'CONFIRMED';
    public const ONE_STAGE_PAY_TYPE = 'O';
    public const TWO_STAGE_PAY_TYPE = 'T';
    public const QR_DATA_TYPE_PAYLOAD = 'PAYLOAD';
    public const QR_DATA_TYPE_IMAGE = 'IMAGE';
}
