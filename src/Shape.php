<?php


namespace Ipssi\Evaluation;


use Ipssi\Evaluation\Exception\Colors;

class Shape extends Colors
{
    protected $shape;
    protected $qttBlue;
    protected $qttGreen;
    protected $qttRed;

    public function __construct(
        string $shape,
        int $qttRed,
        int $qttGreen,
        int $qttBlue
    )

    {
        parent::__construct($qttRed,$qttGreen,$qttBlue);
        $this->shape = $shape;
    }
}