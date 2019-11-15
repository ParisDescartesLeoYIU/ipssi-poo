<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Color;
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Element;
use Ipssi\Evaluation\Position;
use Ipssi\Evaluation\Text;
use Ipssi\Evaluation\Useless;

new Useless(); // Ceci ne sert à rien


$documment = new Document(15, 15,[

        new Text("le ",new Position(10,15),new Color(20,20,0)),
        new Text("cheval ",new Position(11,15),(new Color(20,20,0))),
        new Text("c'est' ",new Position(12,15),(new Color(20,20,0))),
        new Text("genial ",new Position(13,15),(new Color(20,20,0))),
        ]
);


 $documment->getElements();