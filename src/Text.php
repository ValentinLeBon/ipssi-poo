<?php


namespace Ipssi\Evaluation;


use Ipssi\Evaluation\Exception\Colors;
use Ipssi\Evaluation\Position;

class Text extends Colors implements Position
{
    protected $text;


    public function __construct(
        string $text
    )
    {
        $this->text = $text;
    }
}