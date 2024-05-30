<?php

function findPair($arr, $target)
{
    $pair = [];
    $steps = [];

    for ($i = 0; $i < count($arr); $i++) {
        $v = $target - $arr[$i];

        if ($pair[$v] ?? false) {
            $steps[] = [$arr[$i], $v, true];
            return [true, $steps, $target];
        }

        $steps[] = [$arr[$i], $v, false];
        $pair[$arr[$i]] = 1;
    }

    return [false, $steps, $target];
}

// [$match, $steps, $target] = findPair([1, 2, 4, 4, 5, 6, 7, 7, 8, 8], 12);
// [$match, $steps, $target] = findPair([1, 2, 4, 4, 5, 8, 9, 9, 12, 19], 4);
[$match, $steps, $target] = findPair([-9.3, -0.5, 0.25, 0.3, 1.34], -7.96);

if (!$match) {
    echo sprintf("False (tidak ada pasangan yang dijumlahkan = %g)", $target);
} else {
    foreach ($steps as [$x, $y, $valid]) {
        if ($valid) {
            echo sprintf("True (karena %g + %g = %g)", $x, $y, $target);
        }
    }
}
