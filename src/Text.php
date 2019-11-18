<?php


namespace Ipssi\Evaluation;


class Text extends Element implements CouleurInterface
{
    private $text;
    private $couleur;

    /**
     * @return Couleur
     */
    public function getCouleur(): Couleur
    {
        return $this->couleur;
    }

    /**
     * Text constructor.
     * @param $text
     */
    public function __construct(string $text,Position $position, Couleur $couleur    )
    {
        parent::__construct($position);
        $this->text = $text;
        $this->couleur=$couleur;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }


    public function getCouleurInterface(Couleur $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "Le texte est de couleur : Rouge : ".$red." Vert: ".$vert." Bleu : ".$bleu." \n";
    }
}