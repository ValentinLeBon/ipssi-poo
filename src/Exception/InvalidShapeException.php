<?php


namespace Ipssi\Evaluation\Exception;


class InvalidShapeException
{
    public function __construct($value)
    {
        $this->message = 'You can only have clouds or stars';
    }
}