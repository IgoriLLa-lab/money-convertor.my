<?php
require_once __DIR__ . '/vendor/autoload.php';

use exception\CustomNumberException;
use exception\BigNumberException;
use GuzzleHttp\Client;

$client = new Client();

try {
    $array = $client->request('GET', "https://www.cbr-xml-daily.ru/daily_json.js")->getBody();
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
}

try {
    $array = json_decode($array, true);

    $USD = (float)$array["Valute"]["USD"]["Value"]; // Получаем стоимость доллара в рублях

    $USD_in_RUB = null;
    if (isset($_GET["sum"])) {
        $USD_in_RUB = number_format($_GET["usd"] * $USD, 2, '.', '');

        if ($USD_in_RUB < 0) {
            throw new CustomNumberException();
        } elseif ($USD_in_RUB > 1_000_000) {
            throw new BigNumberException();
        }
    }
} catch (CustomNumberException $e) {
    echo 'Отрицательное число';
    $USD_in_RUB = null;
} catch (BigNumberException $b){
    echo 'Слишком большое число';
    $USD_in_RUB = null;
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo "Курс доллара - $USD руб." ?></title>

</head>

<body>

<form action="/" method="get">
    <p>Введите количество долларов: <input type="number" name="usd"></p>
    <input type="submit" value="Отправить" name="sum">
</form>

<p>Итог: <?= $USD_in_RUB ?></p>
</body>
</html>













