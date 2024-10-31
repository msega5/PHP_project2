<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar 2</title>
</head>
<body>

<?php

$n = 2;
switch ($n) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo "error";
}

echo match ($n) {
    1 => 1,
    2 => 2,
    3 => 3,
    default => "error",
};

?>

<form action="../index.php" target="_self">
    <button>Back</button>
</form>

</body>
</html>