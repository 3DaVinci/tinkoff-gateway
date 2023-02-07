<?php

declare(strict_types=1);

namespace Tinkoff\Entity;

class AgentData extends EntityAbstract
{
    /**
     * Признак агента. Возможные значения:
     * bank_paying_agent – банковский платежный агент
     * bank_paying_subagent – банковский платежный субагент
     * paying_agent – платежный агент
     * paying_subagent – платежный субагент
     * attorney – поверенный
     * commission_agent – комиссионер
     * another – другой тип агента
     *
     * @var string|null
     */
    private ?string $agentSign = null;

    /**
     * Наименование операции
     *
     * @var string|null
     */
    private ?string $operationName = null;

    /**
     * Телефоны платежного агента
     *
     * @var array
     */
    private array $phones = [];

    /**
     * Телефоны оператора по приему платежей
     *
     * @var array
     */
    private array $receiverPhones = [];

    /**
     * Телефоны оператора перевода
     *
     * @var array
     */
    private array $transferPhones = [];

    /**
     * Наименование оператора перевода
     *
     * @var string|null
     */
    private ?string $operatorName = null;

    /**
     * Адрес оператора перевода
     *
     * @var string|null
     */
    private ?string $operatorAddress = null;

    /**
     * ИНН оператора перевода
     *
     * @var string|null
     */
    private ?string $operatorInn = null;

    /**
     * @return string|null
     */
    public function getAgentSign(): ?string
    {
        return $this->agentSign;
    }

    /**
     * @param string|null $agentSign
     * @return AgentData
     */
    public function setAgentSign(?string $agentSign): AgentData
    {
        $this->agentSign = $agentSign;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperationName(): ?string
    {
        return $this->operationName;
    }

    /**
     * @param string|null $operationName
     * @return AgentData
     */
    public function setOperationName(?string $operationName): AgentData
    {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * @return array
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    /**
     * @param array $phones
     * @return AgentData
     */
    public function setPhones(array $phones): AgentData
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @return array
     */
    public function getReceiverPhones(): array
    {
        return $this->receiverPhones;
    }

    /**
     * @param array $receiverPhones
     * @return AgentData
     */
    public function setReceiverPhones(array $receiverPhones): AgentData
    {
        $this->receiverPhones = $receiverPhones;
        return $this;
    }

    /**
     * @return array
     */
    public function getTransferPhones(): array
    {
        return $this->transferPhones;
    }

    /**
     * @param array $transferPhones
     * @return AgentData
     */
    public function setTransferPhones(array $transferPhones): AgentData
    {
        $this->transferPhones = $transferPhones;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * @param string|null $operatorName
     * @return AgentData
     */
    public function setOperatorName(?string $operatorName): AgentData
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperatorAddress(): ?string
    {
        return $this->operatorAddress;
    }

    /**
     * @param string|null $operatorAddress
     * @return AgentData
     */
    public function setOperatorAddress(?string $operatorAddress): AgentData
    {
        $this->operatorAddress = $operatorAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperatorInn(): ?string
    {
        return $this->operatorInn;
    }

    /**
     * @param string|null $operatorInn
     * @return AgentData
     */
    public function setOperatorInn(?string $operatorInn): AgentData
    {
        $this->operatorInn = $operatorInn;
        return $this;
    }

}
