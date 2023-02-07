## Сервис для работы с API интернет-эквайринга банка Тинькофф

## Установка

```bash
composer install
```

## Возможности

- init - запрос создания платежа
- getState - запрос статуса платежа
- getQr - регистрирует QR и возвращает информацию о нем от СБП. Должен быть вызван после вызова метода Init.

## Пример использования

```php
<?php

$api = new \Tinkoff\RestGateway([
    'terminalKey' => '1111111111DEMO',
    'password' => 'password'
]);

$params = [
    'orderId' => 200001,
    'amount'  => 100,
    'description' => 'Тестовый платеж'
];

$resp = $api->init($params);
```
