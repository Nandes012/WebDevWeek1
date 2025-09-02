<?php
$name = 'Mike';
echo "Hello $name";
echo 'Hello ' . $name;
echo strlen($name);
echo trim("   text   ");
echo strtolower("HELLO");
echo strtoupper("hello");
echo ucfirst("mike");
echo str_replace('a', 'b', 'banana');
echo str_contains("Mike", "ke");
$pos = strpos("Mike", "k");
echo substr("Mike", 0, $pos);
