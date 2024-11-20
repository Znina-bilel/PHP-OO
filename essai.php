<?php

declare(strict_types=1);

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;

public function setLongueur(float $longueur): void
   {

if ($longueur <0){
    trigger_error(
        'la longueur est trop courte', E_USER_ERROR
    );
}
$this->longueur = $longueur;
   }
}
$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLongueur(-286.0);
