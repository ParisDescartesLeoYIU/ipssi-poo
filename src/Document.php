<?php


namespace Ipssi\Evaluation;


class Document implements Couleur
{
    private $longueur;
    private $largeur;
    private $elements;
    private $couleur;

    /**
     * Document constructor.
     * @param $longueur
     * @param $largeur
     */
    public function __construct(int $longueur, int $largeur, array $elements)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function getElements()
    {

        /** @var Element $element */
        foreach ($this->elements as $element) {


            $element->getPosition();
            switch (get_class($element)) {

                case (namespace\Text::class):
                    /** @var Text $element */
                    echo $element->getText();
                    if ($element instanceof Couleur) {
                        echo $element->getCouleur($element->getColor());
            }
                    break;

                default:
                    echo "error c'est ni une image ni une forme et ni un texte";
                    break;
            }
        };
    }


    public function getElement($index)
    {
        return $this->elements[$index];
    }

//    public function addElement(Element $element)
//    {
//
    public function getCouleur(Color $couleur)
    {
        $red =$couleur->getRouge();
        $vert =$couleur->getVert();
        $bleu =$couleur->getBleu();

        return "Couleur : Rouge : ".$red." Vert: ".$vert." Bleu : ".$bleu." \n";
    }
}