<?php

declare(strict_types=1);

namespace Tinkoff\Http\Request\Qr;

use Tinkoff\Http\Request\RequestAbstract;

class GetQrRequest extends RequestAbstract
{
    public function getMethodName(): string
    {
        return 'GetQr';
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

    public function validate()
    {
        parent::validate('TerminalKey', 'PaymentId', 'Token');
    }
}
