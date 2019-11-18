<?php


namespace Ipssi\Evaluation;


abstract class Element
{

    protected $position;

    /**
     * Element constructor.
     */
    public function __construct(Position $position)
    {
        $this->position=$position;
    }

    /**
     * @return Position
     */
    public function getPosition(): string
    {

        return  "X= " .$this->position->getX()." et Y= ".$this->position->getY() ;
    }


}