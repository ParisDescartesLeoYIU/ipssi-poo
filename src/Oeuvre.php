<?php


namespace Ipssi\Evaluation;


class Oeuvre
{
    protected $nomOeuvre;
    protected $disponible;

    /**
     * Oeuvre constructor.
     * @param $nomOeuvre
     * @param $status
     */
    public function __construct(string $nomOeuvre, bool $disponible)
    {
        $this->nomOeuvre = $nomOeuvre;
        $this->disponible = $disponible;
    }

    /**
     * @return string
     */
    public function getNomOeuvre(): string
    {
        return $this->nomOeuvre;
    }

    /**
     * @return bool
     */
    public function getDisponible(): bool
    {
        return $this->disponible;
    }

    public function setStatusOccuper()
    {
        $this->disponible = false;
    }
    public function setStatusLibre()
    {
        $this->disponible = true;
    }

}