<?php
$name = 'Mike'; //string
$isActive = true; //boolean
$number = 25; //integer
$amount = 99.95; //float
$fruits = ['orange', 'apple', 'banana']; //array
const MAX_USERS = 50; //constant

// Assign 'by reference'
$name1 = "Original";
$name2 = &$name1;

// Output variables
echo "Name: $name\n";
echo "Is Active: " . ($isActive ? 'true' : 'false') . "\n";
echo "Number: $number\n";
echo "Amount: $amount\n";
echo "Fruits: ";
print_r($fruits);
echo "Max Users: " . MAX_USERS . "\n";
echo "Name1: $name1, Name2: $name2\n";