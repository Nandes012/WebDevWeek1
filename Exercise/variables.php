<?php
$name = 'Mike'; //string
$isActive = true; //boolean
$number = 25; //integer
$amount = 99.95; //float
$fruits = ['orange', 'apple', 'banana']; //array
const MAX_USERS = 50; //constant
define('MAX_USERS', 50); //constant

// Assign 'by reference'
$name1 = "Original";
$name2 = &$name1;
