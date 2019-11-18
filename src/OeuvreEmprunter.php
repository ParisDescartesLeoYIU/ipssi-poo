<?php


namespace Ipssi\Evaluation;


class OeuvreEmprunter extends Oeuvre
{
    private $date;

    /**
     * OeuvreEmprunter constructor.
     * @param $date
     */
    public function __construct( \DateTime $date, string $nomOeuvre)
    {
        parent::__construct($nomOeuvre,false );
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getNomOeuvre(): string
    {
        return $this->nomOeuvre;
    }


}