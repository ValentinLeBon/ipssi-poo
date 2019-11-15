<?php


namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Exception\InvalidIntException;
use Ipssi\Evaluation\Exception\InvalidNulException;


class FournisseurEntier
{
    private $firstValue, $secondValue;

    public function __construct($firstValue, $secondValue)
    {
        $this->firstValue = $firstValue;
        $this->secondValue = $secondValue;
    }

    public function checkValue()
    {
        if (is_numeric($this->firstValue) === false) {
            throw new InvalidIntException('1');
        }
        if (is_numeric($this->secondValue) === false) {
            throw new InvalidIntException('2');
        }
        if (is_null($this->secondValue) === true) {
            throw new InvalidNulException('');
        }
    }
}