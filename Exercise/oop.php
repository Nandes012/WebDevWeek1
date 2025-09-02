<?php
class Person {
    public function __construct(protected string $firstName, protected string $lastName) {}
    public function getName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person = new Person("Mike", "Taylor");
echo $person->getName();

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() { echo "Meow"; }
}
$cat = new Cat();
$cat->makeSound();
