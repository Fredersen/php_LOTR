<?php
$porteurAnneau = 'Frodon';
$createurAnneau = 'Soron';
$createurAnneau = strtoupper($createurAnneau);
$membreCommunaute = 8;
$estSurLeDoigt = true;

$porteurAnneau = 'Aragorn';

echo $porteurAnneau;

echo $membreCommunaute + 1;

$middleEarth = "";

echo $middleEarth;

$phrase1 = "L'anneau est porté par " . $porteurAnneau;

$phraseConcatenation = $phrase1 . ' et ' . $createurAnneau . ' le recherche.';

echo $phraseConcatenation;


?>