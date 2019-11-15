<?php


namespace Ipssi\Evaluation\Exception;


class InvalidRgbException
{
    public function __construct($value)
    {
        $this->message = 'You can only have values between 0-255';
    }
}