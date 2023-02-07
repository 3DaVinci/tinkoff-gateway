<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод подтверждает платеж передачей реквизитов, а также списывает средства с карты покупателя при одностадийной оплате и блокирует указанную сумму при двухстадийной.
 * Используется, если у площадки есть сертификация PCI DSS и собственная платежная форма.
 */
class FinishAuthorizeRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'FinishAuthorize';
    }

    /**
     * Зашифрованные данные карты.
     * Объект CardData собирается в виде списка «ключ=значение» (разделитель «;»), зашифровывается открытым ключом (X509 RSA 2048), получившееся бинарное значение кодируется в Base64.
     * Открытый ключ генерируется Банком и выдается при регистрации терминала.
     *
     * @param string $value
     * @return void
     */
    public function setEncryptedPaymentData(string $value): void
    {
        $this->setParameter('EncryptedPaymentData', $value);
    }

    /**
     * Сумма в копейках
     *
     * @param string $value
     * @return void
     */
    public function setAmount(string $value): void
    {
        $this->setParameter('Amount', $value);
    }

    /**
     * Дополнительные параметры платежа в формате "ключ":"значение" (не более 20 пар).
     *
     * @param array $value
     * @return void
     */
    public function setData(array $value): void
    {
        $this->setParameter('DATA', $value);
    }

    /**
     * Email для отправки информации об оплате
     *
     * @param string $value
     * @return void
     */
    public function setInfoEmail(string $value): void
    {
        $this->setParameter('InfoEmail', $value);
    }

    /**
     * IP-адрес покупателя
     *
     * @param string $value
     * @return void
     */
    public function setIp(string $value): void
    {
        $this->setParameter('IP', $value);
    }

    /**
     * Идентификатор платежа в системе банка
     *
     * @param string $value
     * @return void
     */
    public function setPaymentId(string $value): void
    {
        $this->setParameter('PaymentId', $value);
    }

    /**
     * Телефон клиента.
     *
     * @param string $value
     * @return void
     */
    public function setPhone(string $value): void
    {
        $this->setParameter('Phone', $value);
    }

    /**
     * Отправлять/не отправлять клиенту информацию на почту об оплате
     *
     * @param bool $value
     * @return void
     */
    public function setSendEmail(bool $value): void
    {
        $this->setParameter('SendEmail', $value);
    }

    /**
     * Способ платежа. Возможные значения: ACQ
     *
     * @param string $value
     * @return void
     */
    public function setRoute(string $value): void
    {
        $this->setParameter('Route', $value);
    }

    /**
     * Источник платежа. Cards
     *
     * @param string $value
     * @return void
     */
    public function setSource(string $value): void
    {
        $this->setParameter('Source', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'EncryptedPaymentData', 'PaymentId', 'Token');
    }
}
