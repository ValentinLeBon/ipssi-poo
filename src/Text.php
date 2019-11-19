<?php


namespace Ipssi\Evaluation;

class Text extends Position
{
    private $color;
    private $size;
    private $font;
    private $content;

    public function __construct($x, $y, $color,$size,$font ,$content)
    {
        $this->color = $color;
        $this->size = $size;
        $this->font = $font;
        $this->content=$content;
        parent::__construct($x, $y);
    }

    public function __toString()
    {
        return "Texte : couleur:".$this->color."  size:".$this->size."  font:".$this->font."  Postition X,Y:".$this->getX().",".$this->getY()."  Content:".$this->content;
    }
}