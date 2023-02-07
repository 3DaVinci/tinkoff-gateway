<?php

declare(strict_types=1);

namespace Tinkoff\Exception;

use Exception;

class ConfigException extends Exception
{
    public function __construct($message = 'Неверные параметры для подключения')
    {
        parent::__construct($message);
    }
}
