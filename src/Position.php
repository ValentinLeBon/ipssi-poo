<?php


namespace Ipssi\Evaluation;


abstract class Position
{
    private $x;
    private $y;

    public function __construct(
        int $x,
        int $y
    )
    {
        $this->x = $x;
        $this->y = $y;
    }
}