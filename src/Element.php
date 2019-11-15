<?php


namespace Ipssi\Evaluation;


abstract class Element
{

    private $position;

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
    public function getPosition(): Position
    {
        return $this->position;
    }


}