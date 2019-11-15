<?php


namespace Ipssi\Evaluation;


class Document
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