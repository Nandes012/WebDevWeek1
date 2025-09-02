<?php
$condition = 10;
if ($condition == 10) {
    echo 'condition 10';
} elseif ($condition == 5) {
    echo 'condition 5';
} else {
    echo 'other';
}

$isValid = true;
echo $isValid ? 'user valid' : 'user not valid';

$name = null;
echo $name ?? 'Mike';

$color = 'red';
switch ($color) {
    case 'red': echo 'The color is red'; break;
    default: echo 'Unknown';
}
