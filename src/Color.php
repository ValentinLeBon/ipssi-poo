<?php


namespace Ipssi\Evaluation;


class Color
{
    private $R;
    private $G;
    private $B;

    public function __construct(int $R,int $G,int $B)
    {
        $this->R = $R;
        $this->G = $G;
        $this->B = $B;
    }

    public function getB()
    {
        return $this->B;
    }

    public function getG()
    {
        return $this->G;
    }

    public function getR()
    {
        return $this->R;
    }

    public function getColor()
    {
        return "Couleur: R".$this->R." G:".$this->G." B:".$this->B;
    }

}