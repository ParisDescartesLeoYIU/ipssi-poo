<?php


namespace Ipssi\Evaluation;


class Color
{
    private $rouge;
    private $vert;
    private $bleu;

    /**
     * Color constructor.
     * @param $rouge
     * @param $vert
     * @param $bleu
     */
    public function __construct(int $rouge, int $vert, int $bleu)
    {
        $this->rouge = $rouge;
        $this->vert = $vert;
        $this->bleu = $bleu;
    }

    /**
     * @return int
     */
    public function getRouge(): int
    {
        return $this->rouge;
    }

    /**
     * @return int
     */
    public function getVert(): int
    {
        return $this->vert;
    }

    /**
     * @return int
     */
    public function getBleu(): int
    {
        return $this->bleu;
    }


}