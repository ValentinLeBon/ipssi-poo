<?php


namespace Ipssi\Evaluation;

class Star extends Form
{
    public function __construct(Color $color, $size, $x, $y)
    {
        parent::__construct($color, $size, $x, $y);
    }
    public function __toString()
    {
        return "Star : Color:".$this->getColor()."  size:".$this->getSize()."  Postition X,Y:".$this->getX().",".$this->getY();
    }
}