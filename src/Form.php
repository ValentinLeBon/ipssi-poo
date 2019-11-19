<?php


namespace Ipssi\Evaluation\Exception;


use Ipssi\Evaluation\Position;

abstract class Form extends Position
{
    protected $color;
    protected $size;

    public function __construct(
        Color $color,
        int $x,
        int $y,
        int $size
    )
    {
        $this->size = $size;
        $this->color = $color;
        parent::__construct($x, $y);
    }

    public function getColor(): Form
    {
        return "Couleur: R".$this->color->getR()." G:".$this->color->getG()." B:".$this->color->getB();
    }

    public function getSize(): int
    {
        return $this->size;
    }
}