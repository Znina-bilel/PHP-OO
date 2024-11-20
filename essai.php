<?php
declare(strict_types=1);

class Pont 
{
public float $longueur;
public float $largeur;
}
$pont = new Pont;
$pont->longueur = 286.0;
$pont->largeur = 15.0;
$surface = $pont->longueur * $pont->largeur;

var_dump($surface);