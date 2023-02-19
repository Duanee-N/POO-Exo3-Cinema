<meta charset="UTF-8">

<h1>Exercice 3</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.Les films seront caractérisés par leur titre, leur date de sortie en France, leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l'acteur ainsi que le rôle (nom du personnage) joué par l'acteur dans le(s) film(s) concerné(s).</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


$action=new Genre("Action");
$drame=new Genre("Drame");
$sF=new Genre("S-F");
$horreur=new Genre("Horreur");

$BY=new Realisateur("Brian YOUNG", "Homme", "1955-01-16");
$bells=new Film($BY, "Bells", 1954, "1h26", $action, "Les cloches de l'enfer.");
$MalcolmS=new Acteur("Malcolm SCOTT", "Homme", "1952-08-22");
$AS=new Acteur("Angus SCOTT", "Homme", "1955-06-08");
$MD=new Acteur("Marion DAMIANI", "Femme", "1965-11-07");
$rosie=new Film($BY, "Rosie", 1966, "2h05", $sF, "Rosie, une femme particulière.");
$VE=new Acteur("Vanessa EVANS", "Femme", "1973-07-11");
$VR=new Acteur("Victoria RUDD", "Femme", "1970-09-13");


$BellsJG=new Role("Jason GREEN");
$bellsPerso1=new Casting($bells, $MalcolmS, $BellsJG);
$BellsJW=new Role("John WELCH");
$bellsPerso2=new Casting($bells, $AS, $BellsJW);
$BellsCN=new Role("Christine NICKS");
$bellsPerso3=new Casting($bells, $MD, $BellsCN);

$RosieDE=new Role("Daisy EDWARDS");
$rosiePerso1=new Casting($rosie, $VE, $RosieDE);
$RosieSM=new Role("Skye MARTEY");
$rosiePerso2=new Casting($rosie, $VR, $RosieSM);
$RosieRG=new Role("Ross GODFREY");
$rosiePerso3=new Casting($rosie, $MalcolmS, $RosieRG);
$RosiePG=new Role("Paul GODFREY");
$rosiePerso4=new Casting($rosie, $AS, $RosiePG);


$SM=new Realisateur("Stevie MAC", "Femme", "1977-07-23");
$dreams=new Film($SM, "Dreams", 1986, "2h30", $drame, "Les rêves nous emportent loin.");
$MonaS=new Acteur("Mona SMITH", "Femme","1995-08-16");
$AC=new Acteur("Amy CARTNEY", "Femme", "1998-11-26");
$DJ=new Acteur("Dave JOHNSON", "Homme", "1971-01-23");
$daddy=new Film($SM, "Daddy", 2004, "1h45", $horreur, "Un enfant hanté par son père.");
$DM=new Acteur("David MASON", "Homme", "1972-09-11");
$RB=new Acteur("Roger BARRETT", "Homme", "1968-02-12");

$DreamsLC=new Role("Lindsey CLAPTON");
$dreamsPerso1=new Casting($dreams, $MonaS, $DreamsLC);
$DreamsAC=new Role("Rachel BILLIES");
$dreamsPerso2=new Casting($dreams, $AC, $DreamsAC);
$DreamsRK=new Role("Richard KLOSE");
$dreamsPerso3=new Casting($dreams, $DJ, $DreamsRK);

$DaddyTB=new Role("Tony BAILEY");
$daddyPerso1=new Casting($daddy, $DM, $DaddyTB);
$DaddyMS=new Role("Marcus SIFFRE");
$daddyPerso2=new Casting($daddy, $RB, $DaddyMS);
$DaddyJM=new Role("Jenny MILLER");
$daddyPerso3=new Casting($daddy, $VR, $DaddyJM);

$PF=new Realisateur("Perrine FLOYD", "Femme", "1982-03-05");
$nobody=new Film($PF, "Nobody", 2006, "2h15", $action, "Vide chrnonique.");
$BW=new Acteur ("Bob WATERS", "Homme", "1967-06-27");

$NobodyNG=new Role("Nick GILMOUR");
$nobodyPerso1=new Casting($nobody, $DM, $NobodyNG);
$NobodyES=new Role("Eric STING");
$nobodyPerso2=new Casting($nobody, $BW, $NobodyES);
$NobodyLJ=new Role("Lola JONES");
$nobodysPerso3=new Casting($nobody, $AC, $NobodyLJ);


echo $action->afficherGenre();
echo $drame->afficherGenre();
echo $sF->afficherGenre();
echo $horreur->afficherGenre();
echo "<br>";

$BY->infos();
$bells->infosFilm();
$rosie->infosFilm();

$bells->afficherCasting();
echo "<br>";

$rosiePerso1->afficherRole();
$rosiePerso2->afficherRole();
$rosiePerso3->afficherRole();
$rosiePerso4->afficherRole();
echo "<br><br>";

$VE->infosActeur();

?>