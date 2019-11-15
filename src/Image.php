<?php


namespace Ipssi\Evaluation;


class Image
{
    protected $nameImg;
    protected $contentImg;
    protected $sizeImg;

    public function __construct(
        string $nameImg,
        string $contentImg,
        string $sizeImg
    )
    {
        $this->nameImg = $nameImg;
        $this->contentImg = $contentImg;
        $this->sizeImg = $sizeImg;
    }
}