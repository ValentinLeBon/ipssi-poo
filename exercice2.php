<?php

require_once('vendor/autoload.php');
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Cloud;
use Ipssi\Evaluation\Color;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Star;
use Ipssi\Evaluation\Text;

use Ipssi\Evaluation\Exception\InvalidShapeException;
use Ipssi\Evaluation\Exception\InvalidRgbException;

$climate = new League\CLImate\CLImate;

$Doc1=new Document("Mon document",new Color(234,100,61));
$Text= new Text(10,10, new Color(234,100,61),11,"khdcebqskh" ,"h cskh");
$Star= new Star(new Color(123,234,132),64, 234,128);
$Cloud= new Cloud(new Color(34,136,21),56, 234,14);
$Image= new Image("Ma photo",536, 123,245,123);

$Doc1->addElement($Text);
$Doc1->addElement($Star);
$Doc1->addElement($Cloud);
$Doc1->addElement($Image);

$Doc1->__toString();


