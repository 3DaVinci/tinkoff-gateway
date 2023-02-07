<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

abstract class EntityAbstract
{
    public function toArray(): array
    {
        $properties = [];
        foreach ((array) $this as $name => $value) {
            if ($value instanceof EntityInterface || is_array($value)) {
                $properties[ucfirst($name)] = $value->toArray();
            } else if (!is_null($value)) {
                $properties[ucfirst($name)] = $value;
            }
        }

        return $properties;
    }
}
