<?php


namespace Ipssi\Evaluation;


class Shape
{
    protected $shape;

    public function __construct(
        array $shape
    )
    {
        $this->shape = $shape;
    }
}