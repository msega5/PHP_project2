<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar 2</title>
</head>
<body>

<?php

$array1 = [1, 4, 6, 6, 8];
$array2 = [2, 5, 7, 9];

$result = [];

$count1 = 0;
$count2 = 0;

while ($count1 < count($array1) && $count2 < count($array2)) {
    if ($array1[$count1] < $array2[$count2]) {
        $result[] = $array1[$count1];
        $count1++;
    } else {
        $result[] = $array2[$count2];
        $count2++;
    }
}

if ($count1 < count($array1)) {
    for (; $count1 < count($array1); $count1++) {
        $result[] = $array1[$count1];
    }
}

if ($count2 < count($array2)) {
    for (; $count2 < count($array2); $count2++) {
        $result[] = $array2[$count2];
    }
}

echo "<pre>";
print_r($result);
var_dump($result);

?>

<form action="../index.php" target="_self">
    <button>Back</button>
</form>

</body>
</html>