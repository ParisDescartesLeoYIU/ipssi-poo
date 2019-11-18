<?php

use League\CLImate\CLImate;
require_once('vendor/autoload.php');


class DivisionZeroException extends \Exception{}
class ExcedentException extends \Exception{}
class NotNumberException extends  \Exception{}
class ItsAFloatException extends \Exception{}


class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
        if ($diviseur == 0){
            throw new DivisionZeroException();
        }
        if ($index>=sizeof($valeurs)||$index<0){
            throw new ExcedentException();
        }

        return $valeurs[$index] / $diviseur;
    }
}

function recuperationDonner($climate)
{
    $saisie =false;
    do {
        try {

            $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
            $index = $input->prompt();

            $input = $climate->input("Entrez le diviseur : ");
            $diviseur = $input->prompt();

            if (!is_numeric($index) || !is_numeric($diviseur)) {
                throw new NotNumberException();
            }
            if ($diviseur !== (string)intval($diviseur) || $index !== (string)intval($index)) {
                throw new ItsAFloatException();
            }


            $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));

            $saisie = true;

        }
        catch (ItsAFloatException $e){
            $climate->output("\nAttention vous avez rentrer un float \nPS: Oui j'aurais pu combiner celui-la et NotNumber mais j'etais fier d'avoir trouver une nouvelle fonction\n");
        }catch (NotNumberException $e) {
            $climate->output("\nAttention les valeurs rentrer ne sont pas des entiers\n");
        } catch (ExcedentException $e) {
            $climate->output("\nAttention mauvaise valeure de l'index \n");
        } catch (DivisionZeroException $e) {
            $climate->output("\nAttention Division par Zero\n");
        } catch (\Throwable $e) {
            $climate->output("\nUne erreur imprevue est survenue\n");
            $climate->output($e->getMessage());
        }
    }
    while($saisie === false);
}

$climate = new League\CLImate\CLImate;
recuperationDonner($climate);





