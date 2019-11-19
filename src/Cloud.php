<?php


namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Exception\Form;
use Ipssi\Evaluation\Color;

class Cloud extends Form
{
    public function __construct(Color $color,$size ,$x, $y)
    {
        parent::__construct($color,$size, $x, $y);
    }
    public function __toString()
    {
        return "Cloud : Color:".$this->getColor()."  size:".$this->getSize()."  Postition X,Y:".$this->getX().",".$this->getY();
    }
}