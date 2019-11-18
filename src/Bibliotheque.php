<?php


namespace Ipssi\Evaluation;


class Bibliotheque
{
    private  $adherents =[];
    private  $collection;

    /**
     * Bibliotheque constructor.
     * @param $adherent
     * @param $collection
     */
    public function __construct( array $collection)
    {
        $this->collection = $collection;

    }

    /**
     * @return Adherent
     */
    public function getAdherent(): array
    {
        return $this->adherents;
    }

    /**
     * @return array
     */

    public function addAdherent(Adherent $adherent): void
    {
        array_push($this->adherents,$adherent);
    }
    public function getCollection(): array
    {
        return $this->collection;
    }

    public function voirCollection():void
    {
        echo "La biliotheque est actuellement composer des Oeuvres suivants : \n";
        /**@var Oeuvre $oeuvre*/
        foreach($this->collection as $oeuvre){
            echo " - Le ".$oeuvre->getNomOeuvre();
            if ($oeuvre->getDisponible()){
                echo " est disponible \n";
            }
            else {
                echo " n'est pas disponible\n";
            }
        }

    }

    public function voirAdherent():void
    {
        foreach ($this->getAdherent() as $adherent) {
            /** @var Adherent $adherent */
            echo "L'adherent " . $adherent->getNomAdherent() . " Numero ID : " . $adherent->getID() . " a emprunter les articles suivante : \n";
            foreach ($adherent->getListOeuvreEmprunter() as $oeuvreEmprunter) {
                /** @var OeuvreEmprunter $oeuvreEmprunter */
                echo "- " . $oeuvreEmprunter->getNomOeuvre() . " le " . $oeuvreEmprunter->getDate()->format("d-m-Y") . "\n";
            }

        }
    }
}