<?php


declare(strict_types =1);
class Pont
{

public float $longueur;
public float $largeur;

public function getSurface(){

return $surface = $this->longueur * $this->largeur;
var_dump($surface);
}
}
$towerBridge = new Pont;
$towerBridge->longueur = 286.0;
$towerBridge->largeur = 15.0;
$towerBridgeSurfcae = $towerBridge->getSurface();
var_dump($towerBridgeSurfcae);
$manhattanBridge = new Pont;
$manhattanBridge->longueur = 25.0;
$manhattanBridge->largeur = 15.0;
$manhattanBridgeSurface = $manhattanBridge->getSurface();
var_dump($manhattanBridgeSurface);