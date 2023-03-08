<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

class ReceiptItem implements EntityInterface
{
    /**
     * Наименование товара
     *
     * @var string
     */
    private string $name;

    /**
     * Количество или вес товара
     *
     * @var int
     */
    private int $quantity;

    /**
     * Стоимость товара в копейках. Произведение Quantity и Price
     *
     * @var int
     */
    private int $amount;

    /**
     * Цена за единицу товара в копейках
     *
     * @var int
     */
    private int $price;

    /**
     * Признак способа расчета:
     * full_payment — полный расчет
     * full_prepayment — предоплата 100%
     * prepayment — предоплата
     * advance — аванс
     * partial_payment — частичный расчет и кредит
     * credit — передача в кредит
     * credit_payment — оплата кредита
     * @var string
     */
    private string $paymentMethod = 'full_payment';

    /**
     * Признак предмета расчета:
     * commodity — товар
     * excise — подакцизный товар
     * job — работа
     * service — услуга
     * gambling_bet — ставка азартной игры
     * gambling_prize — выигрыш азартной игры
     * lottery — лотерейный билет
     * lottery_prize — выигрыш лотереи
     * intellectual_activity — предоставление результатов интеллектуальной деятельности
     * payment — платеж
     * agent_commission — агентское вознаграждение
     * composite — составной предмет расчета
     * another — иной предмет расчета
     *
     * @var string
     */
    private string $paymentObject = 'commodity';

    /**
     * Ставка НДС:
     * none — без НДС
     * vat0 — 0%
     * vat10 — 10%
     * vat20 — 20%
     * vat110 — 10/110
     * vat120 — 20/120
     *
     * @var string
     */
    private string $tax;

    /**
     * Штрих-код в требуемом формате. В зависимости от типа кассы требования могут отличаться:
     * АТОЛ Онлайн - шестнадцатеричное представление с пробелами. Максимальная длина – 32 байта. Пример: 00 00 00 01 00 21 FA 41 00 23 05 41 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 12 00 AB 00
     * CloudKassir - длина строки: четная, от 8 до 150 байт, т.е. от 16 до 300 ASCII символов ['0' - '9' , 'A' - 'F' ] шестнадцатеричного представления кода маркировки товара. Пример: 303130323930303030630333435
     * OrangeData - строка, содержащая base64 кодированный массив от 8 до 32 байт. Пример: igQVAAADMTIzNDU2Nzg5MDEyMwAAAAAAAQ==
     * В случае передачи в запросе параметра Ean13 не прошедшего валидацию, возвращается неуспешный ответ с текстом ошибки в параметре message = "Неверный параметр Ean13". Валидация параметра Ean13 необходима как в объекте Receipt, так и в объекте Receipts.
     *
     * @var string|null
     */
    private ?string $ean13;

    /**
     * Данные агента
     *
     * @var AgentData|null
     */
    private ?AgentData $agentData = null;

    /**
     * Данные поставщика платежного агента
     *
     * @var SupplierInfo|null
     */
    private ?SupplierInfo $supplierInfo = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ReceiptItem
     */
    public function setName(string $name): ReceiptItem
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return ReceiptItem
     */
    public function setQuantity(int $quantity): ReceiptItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return ReceiptItem
     */
    public function setAmount(int $amount): ReceiptItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return ReceiptItem
     */
    public function setPrice(int $price): ReceiptItem
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return ReceiptItem
     */
    public function setPaymentMethod(string $paymentMethod): ReceiptItem
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentObject(): string
    {
        return $this->paymentObject;
    }

    /**
     * @param string $paymentObject
     * @return ReceiptItem
     */
    public function setPaymentObject(string $paymentObject): ReceiptItem
    {
        $this->paymentObject = $paymentObject;
        return $this;
    }

    /**
     * @return string
     */
    public function getTax(): string
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     * @return ReceiptItem
     */
    public function setTax(string $tax): ReceiptItem
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    /**
     * @param string|null $ean13
     * @return ReceiptItem
     */
    public function setEan13(?string $ean13): ReceiptItem
    {
        $this->ean13 = $ean13;
        return $this;
    }

    /**
     * @return AgentData|null
     */
    public function getAgentData(): ?AgentData
    {
        return $this->agentData;
    }

    /**
     * @param AgentData|null $agentData
     * @return ReceiptItem
     */
    public function setAgentData(?AgentData $agentData): ReceiptItem
    {
        $this->agentData = $agentData;
        return $this;
    }

    /**
     * @return SupplierInfo|null
     */
    public function getSupplierInfo(): ?SupplierInfo
    {
        return $this->supplierInfo;
    }

    /**
     * @param SupplierInfo|null $supplierInfo
     * @return ReceiptItem
     */
    public function setSupplierInfo(?SupplierInfo $supplierInfo): ReceiptItem
    {
        $this->supplierInfo = $supplierInfo;
        return $this;
    }

    public function toArray(): array
    {
        $properties = [];
        foreach ($this as $name => $value) {
            if ($value instanceof EntityInterface) {
                $properties[ucfirst($name)] = $value->toArray();
            } else if (!is_null($value)) {
                $properties[ucfirst($name)] = $value;
            }
        }

        return $properties;
    }
}
