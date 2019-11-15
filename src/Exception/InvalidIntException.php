<?php


namespace Ipssi\Evaluation\Exception;

class InvalidIntException extends \Exception
{
    public function __construct($value)
    {
        $this->message = 'Invalid number for the value ' . $value;
    }
}