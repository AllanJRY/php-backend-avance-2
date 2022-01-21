<?php
include_once ('User.php');
include_once ('Sac.php');
include_once ('Voiture.php');
include_once ('Debuggable.php');
include_once ('DebugPrinter.php');
include_once ('Identifiable.php');

$user = new User('JARRY', 'Allan');
$sac = new Sac('Bleu', 'Eastpack');
$voiture = new Voiture('206', 'Peugeot');

$printer = new DebugPrinter();

$printer
    ->print($user)
    ->print($sac)
    ->print($voiture)
;

echo $user->getIdentity().'<br>';
echo $voiture->getIdentity();




