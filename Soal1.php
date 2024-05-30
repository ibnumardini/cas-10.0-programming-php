<?php
$inp = "601301224564028";

$digits = [];
for ($i = 0; $i < strlen($inp); $i++) {
    $digits[] = intval($inp[$i]);
}

$rev = [];
for ($i = count($digits) - 1; $i >= 0; $i--) {
    $rev[] = $digits[$i];
}

for ($i = 0; $i <= count($rev); $i++) {
    if ($i % 2 == 0) {
        $rev[$i] *= 2;
    }
}

for ($i = 0; $i < count($rev); $i++) {
    if ($rev[$i] > 9) {
        $rev[$i] -= 9;
    }
}

$sum = 0;
for ($i = 0; $i < count($rev); $i++) {
    $sum += $rev[$i];
}

$result = $sum * 9;

echo $result .PHP_EOL;

$lastDigit = $result % 10;

echo $lastDigit . PHP_EOL;
