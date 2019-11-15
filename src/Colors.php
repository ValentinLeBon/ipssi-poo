<?php


namespace Ipssi\Evaluation\Exception;


class Colors
{
    protected $qttRed;
    protected $qttBlue;
    protected $qttGreen;

    public function __construct(
        int $qttRed,
        int $qttGreen,
        int $qttBlue
    )
    {
        $this->qttRed = $qttRed;
        $this->qttGreen = $qttGreen;
        $this->qttBlue = $qttBlue;
    }
}