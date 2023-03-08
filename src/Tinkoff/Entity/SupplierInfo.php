<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

class SupplierInfo implements EntityInterface
{
    /**
     * Телефон поставщика
     *
     * @var array
     */
    private array $phones = [];

    /**Наименование поставщика
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * ИНН поставщика
     *
     * @var string|null
     */
    private ?string $inn = null;

    /**
     * @return array
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    /**
     * @param array $phones
     * @return SupplierInfo
     */
    public function setPhones(array $phones): SupplierInfo
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return SupplierInfo
     */
    public function setName(?string $name): SupplierInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @param string|null $inn
     * @return SupplierInfo
     */
    public function setInn(?string $inn): SupplierInfo
    {
        $this->inn = $inn;
        return $this;
    }

    public function toArray(): array
    {
        $properties = [];
        foreach ($this as $name => $value) {
            if (!is_null($value)) {
                $properties[ucfirst($name)] = $value;
            }
        }

        return $properties;
    }
}
