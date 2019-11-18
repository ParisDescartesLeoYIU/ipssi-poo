<?php


namespace Ipssi\Evaluation;


abstract class Forme extends Element implements CouleurInterface
{
    protected $couleur;

    /**
     * Forme constructor.
     * @param $couleur
     */
    public function __construct( Position $position,Couleur $couleur)
    {
        parent::__construct($position);
        $this->couleur = $couleur;
    }

    public function getCouleur(): Couleur
    {
        return $this->couleur;
    }
    public function getCouleurInterface(Couleur $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "De couleur : Rouge : ".$red." Vert: ".$vert." Bleu : ".$bleu." \n";
    }
}