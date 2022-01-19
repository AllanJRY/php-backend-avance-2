<?php
// Créer une date, par défaut, est initialisé sur la date est l'heure au moment de la création de l'objet.
$today = new DateTime();

// Identique à la ligne précédente.
$today2 = new DateTime('now');

// créer une date comme les ligne précédente, mais change le fuseau horaire pour mettre celui de France.
$todayFr = new DateTime('now', new DateTimeZone('Europe/Paris'));

// Création d'un objet DateTime avec une date prédéfinie, utilisation d'un format anglophone pour la date donnée.
$birthDay = new DateTime('2000-01-20 8:00');

// Utilisation d'une methode de classe (méthode static) pour créer une date basée sur un format personnalisé.
$anniversaire = DateTime::createFromFormat('d/m/Y', '20/01/2000');

// la méthode format permet d'afficher la date en chaine de caractères selon un format donné.
// Voir la documentation pour plus d'informations sur le formatage : https://www.php.net/manual/fr/datetime.format.php
echo $birthDay->format('d/m/Y');

echo "Je suis né le " . $birthDay->format('d/m/Y') . ' à ' . $birthDay->format('H\hi') . '<br>';
echo "Je suis né le " . $birthDay->format('l d F Y') . ' à ' . $birthDay->format('H\hi');

// Obtention d'un objet DateInterval contenant la difference entre deux dates.
// Voir la documentation de l'objet DateInterval pour plus d'informations : https://www.php.net/manual/fr/class.dateinterval.php
$ageDetails = $birthDay->diff($today);

echo $ageDetails->format('Je suis né depuis %y ans %m mois et %d jours');

$licenceSubscriptionDate = new DateTime('2021-11-01'); // Date de la licence
$licenceDuration = new DateInterval('P1M'); // Validité max de la licence (1 mois)
$endOfValidity = clone $licenceSubscriptionDate; // On clone l'object pour ne pas modifier la date initiale
$endOfValidity->add($licenceDuration); // Ajout d'un mois sur la date de la licence

// Modifie la date, plus d'informations et d'exemple voir la documentation : https://www.php.net/manual/fr/datetime.modify.php
echo $today->modify('next Monday');

