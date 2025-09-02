<?php
function fullName($first, $last = 'Default') {
    return "$first $last";
}
echo fullName('Mike', 'Taylor');

function sum(...$params) {
    return array_sum($params);
}
echo sum(1, 2, 3);

$arrow = fn($x) => $x * 2;
echo $arrow(4);
