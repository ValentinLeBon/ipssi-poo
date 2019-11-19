<?php


namespace Ipssi\Evaluation;

class Document
{
    private $name;
    private $color;

    private $content=[];

    public function __construct($name, Color $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addElement($objet)
    {
        $element=array_push($this->content,$objet);
    }
    function getdata(){

        foreach ($this->content as $data){
            $data->__toString();
        }

    }
    public function __toString()
    {
        foreach ($this->content as $data){
            print($data->__toString().PHP_EOL);
        }
        return "Texte : couleur:".$this->color->getColor()." Postition height,:".$this->height."Width".$this->width."  name:".$this->name;

    }
}