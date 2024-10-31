<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar 2</title>
</head>
<body>

<?php
$str = "(())(()()";
echo validate_string($str) ? "Valid str" : "Error" . PHP_EOL;

function validate_string(string $str): bool
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === "(") {
            $count++;
        } else if ($str[$i] === ")") {
            $count--;
        }
        if ($count < 0) {
            return false;
        }
    }
    return $count === 0;
}

echo strlen($str) . PHP_EOL;

$str_k = "Привет!";

echo mb_substr($str_k, 0, 1) . PHP_EOL;
echo mb_strlen($str_k) . PHP_EOL;

#echo "<pre>";
#print_r(mb_str_split($str_k));
var_dump(mb_str_split($str_k));

?>

<form action="../index.php" target="_self">
    <button>Back</button>
</form>

</body>
</html>