<?php

require_once('vendor/autoload.php');
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Shape;
use Ipssi\Evaluation\Text;
use Ipssi\Evaluation\Position;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Exception\InvalidShapeException;
use Ipssi\Evaluation\Exception\InvalidRgbException;

$climate = new League\CLImate\CLImate;


$Document = new Document(test);

$Shapes = new Shape(star, 12,156,45);
$Shapes = new Shape(cloud, 125,15,4);

$Text = new Text (qdv);

$Image = new Image(firstImage);


