<?php
$a = 5;
$b = 9;

echo "Было а = $a\n";
echo "Было b = $b\n";

$a = $a + $b;
$b = $a - $b;

echo "Стало b = $b\n";

$a = $a - $b;
echo "Стало a = $a\n";

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php