<?php


namespace Ipssi\Evaluation\Exception;


class InvalidNulException extends \Exception
{
    public function __construct($value)
    {
        $this->message = 'You can\'t divide by zero ';
    }
}