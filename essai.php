<?php

declare(strict_types=1);

class Pont
{
   public float $longueur;
   public float $largeur;
  
   public function getSurface(): float
   {
       return $this->longueur * $this->largeur;
   }
}