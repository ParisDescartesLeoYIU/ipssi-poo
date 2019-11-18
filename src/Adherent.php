<?php


namespace Ipssi\Evaluation;


class Adherent
{
    private $nomAdherent ;
    private $iD;
    private $listOeuvreEmprunter =[];

    /**
     * Adherent constructor.
     * @param string $nomAdherent
     * @param int $iD
     * @param array $listOeuvreEmprunter
     */
    public function __construct(string $nomAdherent, int $iD)
    {
        $this->nomAdherent = $nomAdherent;
        $this->iD = $iD;
    }

    /**
     * @return string
     */
    public function getNomAdherent(): string
    {
        return $this->nomAdherent;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->iD;
    }

    public function addOeuvreEmprunter(OeuvreEmprunter $oeuvreEmprunter)
    {
        array_push($this->listOeuvreEmprunter,$oeuvreEmprunter);
    }

    public function emprunterOeuvre(Bibliotheque $bibliotheque ,string $nomOeuvre, \DateTime $date) : string
    {

        $oeuvreExiste=false;
        foreach ($this->listOeuvreEmprunter as $oeuvreEmprunter)
        {
            /**@var OeuvreEmprunter $oeuvreEmprunter*/
            if ($oeuvreEmprunter->getDate()->diff($date)->format("%a")>14){
                    return "Impossible d'emprunter l'oeuvre ".$nomOeuvre." Vous avez un pret en cours dont la date limite de restitution est depasser \n";
              }
        }


        foreach ($bibliotheque->getCollection() as $oeuvre){


            /** @var Oeuvre $oeuvre */
            if ($oeuvre->getNomOeuvre()===$nomOeuvre){

                $oeuvreExiste=true;
                if ($oeuvre->getDisponible()===true){
                    $oeuvre->setStatusOccuper();
                    $this->addOeuvreEmprunter(new OeuvreEmprunter($date,$nomOeuvre));

                    return $this->getNomAdherent()." ID : ".$this->getID()." emprunte un exemplaire de ".$nomOeuvre.", veuillez le rendre avant le ".
                        $date->add(new \DateInterval( 'P14D'))->format("d-m-Y").
                        ", oeuvre emprunter le ".$date->sub(new \DateInterval( 'P14D'))->format("d-m-Y")."\n" ;
                }

            }

        }
        if($oeuvreExiste){
              return "L'oeuvre ".$nomOeuvre. " a ete trouver mais aucun exemplaire disponible actuellement \n";

        }
        else {
            return "L'oeuvre ".$nomOeuvre. " est inexistant dans la bibliotheque \n";
        }

    }

    public function  getOeuvre(string $nomOeuvre):OeuvreEmprunter
    {
        /**@var OeuvreEmprunter $oeuvre*/
        foreach ($this->listOeuvreEmprunter as $oeuvre){
            if ($oeuvre->getNomOeuvre()===$nomOeuvre){

                return $oeuvre;
            }
        }
        return new OeuvreEmprunter(new \DateTime("01-01-2001"),"Oeuvre inexistant");
    }

    public function rendreOeuvre(Bibliotheque $bibliotheque, string $nomOeuvre): string{

        $oeuvreEmprunter = $this->getOeuvre($nomOeuvre);

        foreach ($bibliotheque->getCollection() as $oeuvre){

            /**@var Oeuvre $oeuvre*/
            if ($oeuvre->getNomOeuvre()===$nomOeuvre) {
                if (!$oeuvre->getDisponible()) {
                    $key = array_search($oeuvreEmprunter, $this->listOeuvreEmprunter);
                    unset($this->listOeuvreEmprunter[$key]);
                    $oeuvre->setStatusLibre();
                    return "L'oeuvre ".$nomOeuvre." a bien ete rendu\n";
                }

            }
        }

        return "L'oeuvre ".$oeuvreEmprunter->getNomOeuvre()." n'appartient pas a notre bibliotheque il y a eu une erreur\n";
    }
    /**
     * @return array
     */
    public function getListOeuvreEmprunter(): array
    {
        return $this->listOeuvreEmprunter;
    }
}