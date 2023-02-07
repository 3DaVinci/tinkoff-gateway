<?php

declare(strict_types=1);

namespace Tinkoff\Exception;

use Exception;

class ValidateRequestException extends Exception
{
    public function __construct(string $fieldName)
    {
        $message = sprintf('В запросе отсутствует обязательное поле %s', $fieldName);
        parent::__construct($message);
    }
}
