<?php


namespace Ipssi\Evaluation;


abstract class Forme extends Element implements Couleur
{
    private $couleur;



    public function getCouleur(Color $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "Le texte est de couleur : Rouge : ".$red." Vert: ".$vert." Bleu : ".$bleu." \n";
    }
}