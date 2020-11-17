<?php
// HINT VOOR PHPSTORM, druk 'CTRL' in, en klik op de class hieronder om direct bij de goeie class te komen.

$dog = new Dog();
$cat = new Cat();

// We weten altijd zeker dat Dog altijd een sound(); methode heeft, omdat dit bepaald is door IAnimal.
// Maar dit geld niet voor Cat, deze heeft niet deze methode, want gebruikt IAnimal niet.
// Interfaces maken het dus mogelijk om ALTIJD zeker te zijn dat een methode beschikbaar is.
$dog->sound();
$cat->sound();

echo "De naam van de hond is: " . $dog->getName();

?>