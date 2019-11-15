<?php


namespace Ipssi\Evaluation;


class Position
{
    private $x;
    private $y;

    /**
     * Position constructor.
     * @param $x
     * @param $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

}