<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar 2</title>
</head>
<body>

<?php
$x = 1;

function add(int $x = 0, int $y = 0): int|string
{
    return $x + $y;
}

$result = add(1, 2);

echo "<pre>";
print_r($result);
var_dump($result);

?>

<form action="../index.php" target="_self">
    <button>Back</button>
</form>

</body>
</html>