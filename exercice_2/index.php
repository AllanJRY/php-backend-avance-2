<?php

include_once ('AgeTrait.php');
include_once ('User.php');
include_once ('Vehicule.php');
include_once ('Vegetation.php');
include_once ('Animal.php');

$user = new User('Allan JARRY', DateTime::createFromFormat('d/m/Y', '11/02/1995'));
$animal = new Animal('Chat', DateTime::createFromFormat('d/m/Y', '11/02/2000'));
$vehicle = new Vehicule('206', DateTime::createFromFormat('d/m/Y', '11/02/1999'));
$vegetation = new Vegetation('Vert', DateTime::createFromFormat('d/m/Y', '11/02/2012'));

echo sprintf('Mon user est agé de %d ans(s) et s\'appelle %s <br>', $user->getAge(), $user->getName());;
echo sprintf('Mon animal est agé de %d ans(s) <br>', $animal->getAge());;
echo sprintf('Mon véhicule est agé de %d ans(s) <br>', $vehicle->getAge());;
echo sprintf('Ma végétation est agé de %d ans(s) <br>', $vegetation->getAge());;
