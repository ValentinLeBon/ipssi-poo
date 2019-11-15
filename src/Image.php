<?php


namespace Ipssi\Evaluation;


class Image
{
    protected $nameImg;

    public function __construct(
        string $nameImg
    )
    {
        $this->nameImg = $nameImg;
    }
}