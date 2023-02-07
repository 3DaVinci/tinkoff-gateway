<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class AddAccountQrRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'AddAccountQr';
    }

    /**
     * Подробное описание деталей заказа
     *
     * @param string $value
     * @return void
     */
    public function setDescription(string $value): void
    {
        $this->setParameter('Description', $value);
    }

    /**
     * Тип возвращаемых данных
     * PAYLOAD – В ответе возвращается только Payload - ссылка на оплату (по умолчанию)
     * IMAGE – В ответе возвращается SVG изображение QR
     *
     * @param string $value
     * @return void
     */
    public function setDataType(string $value): void
    {
        $this->setParameter('DataType', $value);
    }

    /**
     * JSON объект, содержащий дополнительные параметры в виде “ключ”:” значение”. Данные параметры будут переданы на страницу оплаты (в случае ее кастомизации). Максимальная длина для каждого передаваемого параметра:
     * Ключ – 20 знаков;
     * Значение – 100 знаков.
     * Максимальное количество пар «ключ-значение» не может превышать 20
     *
     * @param array $value
     * @return void
     */
    public function setData(array $value): void
    {
        $this->setParameter('DATA', $value);
    }

    /**
     * Cрок жизни ссылки или динамического QR-кода СБП (если выбран данный способ оплаты). Если текущая дата превышает дату, переданную в данном параметре, ссылка для оплаты или возможность платежа по QR-коду становятся недоступными и платёж выполнить нельзя.
     * Максимальное значение: 90 дней от текущей даты.
     * Минимальное значение: 1 минута от текущей даты.
     * Формат даты: YYYY-MM-DDTHH24:MI:SS+GMT
     * Пример даты: 2016-08-31T12:28:00+03:00
     *
     * @param string $value
     * @return void
     */
    public function setRedirectDueDate(string $value): void
    {
        $this->setParameter('RedirectDueDate', $value);
    }

    public function validate()
    {
        parent::validate('TerminalKey', 'Description', 'Token');
    }
}
