<?php

use Ipssi\Evaluation\Adherent;
use Ipssi\Evaluation\Bibliotheque;
use Ipssi\Evaluation\Oeuvre;
use Ipssi\Evaluation\OeuvreEmprunter;

require_once('vendor/autoload.php');


$thomas = new Adherent("thomas",1012);
$leo = new Adherent("leo",1011);
$bibliotheque = new Bibliotheque([
        new Oeuvre("livre1",true),
        new Oeuvre("livre1",true),
        new Oeuvre("livre2",true),
        new Oeuvre("livre3",true),
        new Oeuvre("livre4",true),
        new Oeuvre("livre5",true),
        new Oeuvre("livre5",true),
    ]
);
$bibliotheque->addAdherent($leo);
$bibliotheque->addAdherent($thomas);

echo $thomas->emprunterOeuvre($bibliotheque,"livre1",new DateTime('11-10-2010'));
echo $thomas->emprunterOeuvre($bibliotheque,"livre",new DateTime('16-10-2010'));
echo $thomas->emprunterOeuvre($bibliotheque,"livre1",new DateTime('16-10-2010'));

echo $leo->emprunterOeuvre($bibliotheque,"livre1",new DateTime('16-10-2010'));
echo $thomas->emprunterOeuvre($bibliotheque,"livre3",new DateTime('01-11-2010'));
echo $thomas->rendreOeuvre($bibliotheque,"livre1");
echo $thomas->rendreOeuvre($bibliotheque,"livre1");
;
echo $thomas->emprunterOeuvre($bibliotheque,"livre3",new DateTime('01-11-2010'));
echo $leo->emprunterOeuvre($bibliotheque,"livre1",new DateTime('16-11-2010'));
echo $leo->emprunterOeuvre($bibliotheque,"livre2",new DateTime('16-11-2010'));

echo (" \n");
$bibliotheque->voirAdherent();

echo (" \n");
echo (" \n");
$bibliotheque->voirCollection();