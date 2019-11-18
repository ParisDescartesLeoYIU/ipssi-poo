<?php


namespace Ipssi\Evaluation;


class Document implements CouleurInterface
{
    private $elements;
    private $couleur;

    /**
     * Document constructor.
     * @param $longueur
     * @param $largeur
     */
    public function __construct(array $elements, Couleur $couleur)
    {
        $this->couleur = $couleur;
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function getElements()
    {
        echo "Le Document est de couleur ".$this->getCouleurInterface($this->couleur);
        /** @var Element $element */
        foreach ($this->elements as $element) {


            echo "Au coordonner ".$element->getPosition()." il y a \n";
            switch (get_class($element)) {


                case (namespace\Text::class):
                    /** @var Text $element */
                    echo "Un texte : '".$element->getText()."' \n";
                    echo $element->getCouleurInterface($element->getCouleur());
                    break;

                case (namespace\Nuage::class):
                    /** @var Nuage $element */
                    echo "Un Nuage ! \n";
                    echo $element->getCouleurInterface($element->getCouleur());
                    break;

                case (namespace\Etoile::class):
                    /** @var Etoile $element */
                    echo "Une Etoile ! \n";
                    echo $element->getCouleurInterface($element->getCouleur());
                    break;
                case (namespace\Image::class):
                    /** @var Image $element */
                    echo "Une Image : ".$element->getNom();
                    break;

                default:
                    echo "error c'est ni une image ni une forme et ni un texte";
                    break;
            }
        }
    }


    public function getElement($index)
    {
        return $this->elements[$index];
    }



    public function getCouleurInterface(Couleur $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "RGB: (".$red.",".$vert.",".$bleu.") \n";
    }
}