<?php
for ($i = 0; $i < 5; $i++) {
    echo "i = $i\n";
}

$number = 1;
while ($number < 5) {
    echo "value: $number\n";
    $number++;
}

$values = ['one', 'two', 'three'];
foreach ($values as $value) {
    echo $value . "\n";
}
