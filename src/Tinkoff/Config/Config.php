<?php

declare(strict_types=1);

namespace Tinkoff\Config;

use Tinkoff\Exception\ConfigException;

class Config
{
    private string $terminalKey;

    private string $password;

    /**
     * @throws ConfigException
     */
    public function __construct(array $config)
    {
        foreach ($config as $name => $value) {
            if (property_exists($this, $name)) {
                $this->$name = $value;
            } else {
                throw new ConfigException();
            }
        }
    }

    /**
     * @return string
     */
    public function getTerminalKey(): string
    {
        return $this->terminalKey;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
