<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Payment;

use Tinkoff\Entity\Receipt;
use Tinkoff\Http\Request\RequestAbstract;

/**
 * Метод создает платеж: продавец получает ссылку на платежную форму и должен перенаправить по ней покупателя
 */
class InitRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'Init';
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
     * Идентификатор заказа в системе продавца
     *
     * @param string $value
     * @return void
     */
    public function setOrderId(string $value): void
    {
        $this->setParameter('OrderId', $value);
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
     * Описание заказа
     *
     * @param string $value
     * @return void
     */
    public function setDescription(string $value): void
    {
        $this->setParameter('Description', $value);
    }

    /**
     * Enum: "ru" "en"
     * Выбор языка формы, по умолчанию ru
     *
     * @param string $value
     * @return void
     */
    public function setLanguage(string $value): void
    {
        $this->setParameter('Language', $value);
    }

    /**
     * Идентификатор родительского платежа. Передается со значением Y
     *
     * @param string $value
     * @return void
     */
    public function setRecurrent(string $value): void
    {
        $this->setParameter('Recurrent', $value);
    }

    /**
     * Идентификатор покупателя в системе продавца. Передается вместе с параметром CardId.
     * Также необходим для сохранения карт на платежной форме (платежи в один клик).
     *
     * @param string $value
     * @return void
     */
    public function setCustomerKey(string $value): void
    {
        $this->setParameter('CustomerKey', $value);
    }

    /**
     * Срок жизни ссылки или динамического QR-кода СБП, если выбран данный способ оплаты
     * Максимальное значение: 90 дней от текущей даты
     * Временная метка по стандарту ISO8601 в формате YYYY-MM-DDThh:mm:ss±hh:mm
     * Если не передан, принимает значение 24 часа для платежа и 30 дней для счета
     *
     * @param string $value
     * @return void
     */
    public function setRedirectDueDate(string $value): void
    {
        $this->setParameter('RedirectDueDate', $value);
    }

    /**
     * Адрес для получения http нотификаций
     *
     * @param string $value
     * @return void
     */
    public function setNotificationURL(string $value): void
    {
        $this->setParameter('NotificationURL', $value);
    }

    /**
     * Страница успеха
     *
     * @param string $value
     * @return void
     */
    public function setSuccessUrl(string $value): void
    {
        $this->setParameter('SuccessURL', $value);
    }

    /**
     * Страница ошибки
     *
     * @param string $value
     * @return void
     */
    public function setFailUrl(string $value): void
    {
        $this->setParameter('FailURL', $value);
    }

    /**
     * Тип оплаты: O — одностадийная, T — двухстадийная
     *
     * @param string $value
     * @return void
     */
    public function setPayType(string $value): void
    {
        $this->setParameter('PayType', $value);
    }

    /**
     * Массив данных чека.
     *
     * @param Receipt $value
     * @return void
     */
    public function setReceipt(Receipt $value): void
    {
        $this->setParameter('Receipt', $value);
    }

    /**
     * Дополнительные параметры платежа в формате "ключ":"значение" (не более 20 пар). Наименование самого параметра должно быть в верхнем регистре, иначе его содержимое будет игнорироваться.
     * 1. Если у терминала включена опция привязки покупателя после успешной оплаты и передается параметр CustomerKey, то в передаваемых параметрах DATA могут присутствовать параметры метода AddCustomer.
     * Если они присутствуют, то автоматически привязываются к покупателю.
     * Например, если указать: "DATA":{"Phone":"+71234567890", "Email":"a@test.com"}, к покупателю автоматически будут привязаны данные Email и телефон, и они будут возвращаться при вызове метода GetCustomer.
     * 2. Если используется функционал сохранения карт на платежной форме, то при помощи опционального параметра "DefaultCard" можно задать какая карта будет выбираться по умолчанию. Возможные варианты:
     * Оставить платежную форму пустой. Пример: "DATA":{"DefaultCard":"none"};
     * Заполнить данными передаваемой карты. В этом случае передается CardId. Пример: "DATA":{"DefaultCard":"894952"};
     * Заполнить данными последней сохраненной карты. Применяется, если параметр "DefaultCard" не передан, передан с некорректным значением или в значении null.
     *
     * @param array $value
     * @return void
     */
    public function setData(array $value): void
    {
        $this->setParameter('DATA', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'Amount', 'OrderId');
    }
}
