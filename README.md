## Конвертор валюты (USD->RUB) - Домашнее заданее № 6:

- Простой конвертов валюты с долларов в рубли.
- В командной строке OpenServer установил Сomposer, командой curl -sS https://getcomposer.org/installer | php.
- Был установлен guzzlehtt, командой composer require guzzlehttp/guzzle.
- Добавляем в файл index.php добавляем строчку require_once "__DIR__ . '/vendor/autoload.php';".
- Создаем Client в Guzzle и делаем запрос на сайт https://www.cbr-xmldaily.ru/daily_json.js.
- С помощью метода json_decode преобразуем закодированную в JSON строку  в переменную PHP.
- Получаем стоимость Доллара в рублях обращаясь к ячейкам массива.
- Создаем простую форму Html которая будет отправлять количество долларов необходимых для перевода в рубли.
- Простой фукцией умножаем количество долларов на стоимость доллара в рублях.
- Были созданы 2 класса исключений находящиеся в папке exception, это BigNumberException (слишком большое введенное число больше 1000000) и CustomNumberException (проверка на отрицательное введенное число).
- В index.php создана простая проверка на данные ошибки и в блоке catch выбрасываются данные исключения.
- По стандарту PSR-4 была создана автозагрузка классов исключений в файле composer.json и обновлена в командной строке с помощью команды composer dump-autoload.


# Домашнее задание 5:
#### 1. Написать конвертер валют, используя данные из ЦБ РФ (например, из https://www.cbr-xmldaily.ru/daily_json.js). Настройку запроса на получение данных из серверов осуществить через GuzzleHttp.
#### 2. Обернуть код отправки запроса в try-catch, написать собственный класс Exception, который будет выбрасывать ошибку (например, на слишком большое или отрицательное введенное число).

 
