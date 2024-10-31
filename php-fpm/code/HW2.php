<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar 2</title>
</head>
<body>

<?php
/*
Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция.
Обязательно использовать оператор return.
*/

function calc(int $num1, int $num2, string $operation): int|float
{
    return match ($operation) {
        "-" => $num1 - $num2,
        "*" => $num1 * $num2,
        "/" => $num1 / $num2,
        default => $num1 + $num2,
    };
}

;

echo "<pre>";
print_r(calc(11, 2, "/")) . "<br>";
echo "\n";

/*
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "-":
            echo $arg1 - $arg2;
            break;
        case "*":
            echo $arg1 * $arg2;
            break;
        case "/":
            echo $arg1 / $arg2;
            break;
        default:
            echo $arg1 + $arg2;
            break;
    };
}

;

echo "<pre>";
print_r(mathOperation(111, 2, "/")) . "<br>";
echo "\n";
echo "\n";

/*
Объявить массив, в котором в качестве ключей будут использоваться названия областей,
а в качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область: Москва, Зеленоград, Клин
Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru).
*/

$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Кирицы", "Пронск"]
];

foreach ($cities as $key => $region) {
    echo $key . ": ";
    $str = "";
    foreach ($region as $city) {
        $str .= $city . ", ";
    }
    $str = mb_substr($str, 0, -2) . "<br>";
    echo $str;
}
echo "\n";
echo "\n";

/*
Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.
*/

function translit($string)
{
    $letters = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'csh', 'ь' => '', 'ы' => 'y', 'ъ' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '_'
    );
    return str_replace(array_keys($letters), array_values($letters), $string);
}
$translitTxt = translit("Текст, который надо преобразовать");
echo $translitTxt;

?>

<form action="../index.php" target="_self">
    <button>Back</button>
</form>

</body>
</html>