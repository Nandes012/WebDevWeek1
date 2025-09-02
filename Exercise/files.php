<?php
$file = fopen("test.txt", "w");
fwrite($file, "Hello World");
fclose($file);

if (file_exists("test.txt")) {
    echo file_get_contents("test.txt");
}
