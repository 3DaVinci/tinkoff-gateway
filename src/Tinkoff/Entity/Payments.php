<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

class Payments implements EntityInterface
{
    /**
     * Вид оплаты "Наличные". Сумма к оплате в копейках не более 14 знаков.
     *
     * @var int|null
     */
    private ?int $cash = null;

    /**
     * Вид оплаты "Безналичный".
     *
     * @var int
     */
    private int $electronic;

    /**
     * Вид оплаты "Предварительная оплата (Аванс)".
     *
     * @var int|null
     */
    private ?int $advancePayment = null;

    /**
     * Вид оплаты "Постоплата (Кредит)"
     *
     * @var int|null
     */
    private ?int $credit = null;

    /**
     * Вид оплаты "Иная форма оплаты".
     *
     * @var int|null
     */
    private ?int $provision = null;

    /**
     * @return int|null
     */
    public function getCash(): ?int
    {
        return $this->cash;
    }

    /**
     * @param int|null $cash
     * @return Payments
     */
    public function setCash(?int $cash): Payments
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * @return int
     */
    public function getElectronic(): int
    {
        return $this->electronic;
    }

    /**
     * @param int $electronic
     * @return Payments
     */
    public function setElectronic(int $electronic): Payments
    {
        $this->electronic = $electronic;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAdvancePayment(): ?int
    {
        return $this->advancePayment;
    }

    /**
     * @param int|null $advancePayment
     * @return Payments
     */
    public function setAdvancePayment(?int $advancePayment): Payments
    {
        $this->advancePayment = $advancePayment;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCredit(): ?int
    {
        return $this->credit;
    }

    /**
     * @param int|null $credit
     * @return Payments
     */
    public function setCredit(?int $credit): Payments
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProvision(): ?int
    {
        return $this->provision;
    }

    /**
     * @param int|null $provision
     * @return Payments
     */
    public function setProvision(?int $provision): Payments
    {
        $this->provision = $provision;
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
