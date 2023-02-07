<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

class Receipt
{
    /**Электронная почта покупателя
     *
     * @var string|null
     */
    private ?string $email = null;

    /**
     * Телефон покупателя
     *
     * @var string|null
     */
    private ?string $phone = null;

    /**
     * Система налогообложения:
     * osn — общая
     * usn_income — упрощенная (доходы)
     * usn_income_outcome — упрощенная (доходы минус расходы)
     * patent — патентная
     * envd — единый налог на вмененный доход
     * esn — единый сельскохозяйственный налог
     *
     * @var string
     */
    private string $taxation;

    /**
     * Массив позиций чека с информацией о товарах.
     *
     * @var array
     */
    private array $items;

    /**
     * Объект с информацией о видах оплаты заказа
     *
     * @var Payments|null
     */
    private ?Payments $payments = null;

    /**
     * Дополнительный реквизит чека (БСО) (тег 1192)
     *
     * @var string|null
     */
    private ?string $additionalCheckProps = null;

    /**
     * Версия ФФД:
     * "FfdVersion": "1.2"
     * "FfdVersion": "1.05"
     *
     * @var string|null
     */
    private ?string $ffdVersion = null;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Receipt
     */
    public function setEmail(?string $email): Receipt
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Receipt
     */
    public function setPhone(?string $phone): Receipt
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxation(): string
    {
        return $this->taxation;
    }

    /**
     * @param string $taxation
     * @return Receipt
     */
    public function setTaxation(string $taxation): Receipt
    {
        $this->taxation = $taxation;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return Receipt
     */
    public function setItems(array $items): Receipt
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return Payments|null
     */
    public function getPayments(): ?Payments
    {
        return $this->payments;
    }

    /**
     * @param Payments|null $payments
     * @return Receipt
     */
    public function setPayments(?Payments $payments): Receipt
    {
        $this->payments = $payments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdditionalCheckProps(): ?string
    {
        return $this->additionalCheckProps;
    }

    /**
     * @param string|null $additionalCheckProps
     * @return Receipt
     */
    public function setAdditionalCheckProps(?string $additionalCheckProps): Receipt
    {
        $this->additionalCheckProps = $additionalCheckProps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFfdVersion(): ?string
    {
        return $this->ffdVersion;
    }

    /**
     * @param string|null $ffdVersion
     * @return Receipt
     */
    public function setFfdVersion(?string $ffdVersion): Receipt
    {
        $this->ffdVersion = $ffdVersion;
        return $this;
    }
}
