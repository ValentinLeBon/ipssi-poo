<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Exception\InvalidIntException;
use Ipssi\Evaluation\Exception\InvalidNulException;

$climate = new League\CLImate\CLImate;


class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

        return $valeurs[$index] / $diviseur;
    }
}

do {
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();

    try {
        if (is_numeric($diviseur)===false || is_numeric($index)===false) {
            throw new InvalidIntException('Erreur  string', "diviseur ou index");
        }
        if ($diviseur == 0) {
            throw new InvalidNulException("Division par 0", "diviseur");
        }

        $result = (new Diviseur())->division($index, $diviseur);
        $climate->output("Le résultat de la division est : " . $result);

    } catch (InvalidIntException $e) {
        echo 'Error : '. $e->getMessage();
        echo PHP_EOL;
    }
    catch (InvalidNulException $e) {
        echo 'Error : ' .$e->getMessage();
        echo PHP_EOL;
    }
} while (isset($result) === false);



