<?php
$names = ['Mike', 'Peter', 'Shawn', 'John'];
echo $names[1];

$names[] = 'Micheal';
echo implode(', ', $names);

$person = ['age' => 45, 'genre' => 'men'];
$person['name'] = 'Mike';

foreach ($person as $key => $value) {
    echo "$key : $value\n";
}
