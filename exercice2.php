<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Couleur;
use Ipssi\Evaluation\CouleurInterface;
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Etoile;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Nuage;
use Ipssi\Evaluation\Position;
use Ipssi\Evaluation\Text;
use Ipssi\Evaluation\Useless;

new Useless(); // Ceci ne sert à rien


$documment = new Document([
        new Text("le ",new Position(10,15),new Couleur(20,20,0)),
        new Text("cheval ",new Position(11,15),(new Couleur(20,20,0))),
        new Etoile(new Position(14,15),(new Couleur(20,20,0))),
        new Nuage(new Position(13,15),(new Couleur(20,20,0))),
        new Image(new Position(13,15),"Teletubbies"),
        ],new Couleur(255,255,255)
);


 $documment->getElements();