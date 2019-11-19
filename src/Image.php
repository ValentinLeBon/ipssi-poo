<?php


namespace Ipssi\Evaluation;


use Ipssi\Evaluation\Exception\Position;

class Image extends Position
{

    private $name;
    private $height;
    private $width;

    public function __construct($name, $height, $width,$x,$y)
    {
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
        parent::__construct($x,$y);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }

    public function __toString()
    {
        return "Image Name:".$this->name."  Width:".$this->getWidth()."  height:".$this->height;
    }
}