<?php


namespace Ipssi\Evaluation\Exception;


class Colors
{
    protected $nameColor;
    protected $qttRed;
    protected $qttBlue;
    protected $qttGreen;

    public function __construct(
        string $nameColor,
        int $qttRed,
        int $qttGreen,
        int $qttBlue
    )
    {
        $this->nameColor = $nameColor;
        $this->qttRed = $qttRed;
        $this->qttGreen = $qttGreen;
        $this->qttBlue = $qttBlue;
    }
}