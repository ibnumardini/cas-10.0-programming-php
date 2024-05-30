<?php

/**
 * test case
 * A,B,C,B,A
 * A,B,C,D,E,C,F,Z
 * A,B,C,X,Y,Z
 */

$in = readline();
$in = explode(",", $in);

$map = [];
$match = false;

foreach ($in as $v) {
    if (!($map[$v] ?? false)) {
        $map[$v] = $v;
    } else if ($map[$v]) {
        $match = $map[$v];
        break;
    }
}

echo $match ? $match : "false" . PHP_EOL;
