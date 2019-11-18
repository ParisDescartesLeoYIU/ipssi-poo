<?php


namespace Ipssi\Evaluation;


class Image extends Element
{

    private $nom;

    /**
     * Image constructor.
     * @param $nom
     */
    public function __construct(Position $position,string $nom)
    {
        parent::__construct($position);
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }



}