<?php

namespace App\Entity;

use App\Repository\VoyanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoyanteRepository::class)]
class Voyante extends Personnage
{
  public function pouvoirVoyante(int $id)
  {
    $carteId = $this->getCarte($id);
    return $carteId;
  }
}
