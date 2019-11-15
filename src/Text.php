<?php


namespace Ipssi\Evaluation;


class Text
{
    protected $text;
    protected $font;
    protected $size;

    public function __construct(
        string $text,
        string $font,
        int $size
    )
    {
        $this->text = $text;
        $this->font = $font;
        $this->size = $size;
    }
}