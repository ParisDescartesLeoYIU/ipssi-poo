<?php


namespace Ipssi\Evaluation;


class Text extends Element implements Couleur
{
    private $text;
    private $color;

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * Text constructor.
     * @param $text
     */
    public function __construct(string $text,Position $position, Color $color    )
    {
        parent::__construct($position);
        $this->text = $text;
        $this->color=$color;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

//
//    public function  setCouleur(Couleur $couleur)
//    {
//        $this->color = $couleur;
//    }

    public function getCouleur(Color $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "Le texte est de couleur : Rouge : ".$red." Vert: ".$vert." Bleu : ".$bleu." \n";
    }
}