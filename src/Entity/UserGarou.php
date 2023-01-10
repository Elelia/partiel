<?php

namespace App\Entity;

use App\Repository\UserGarouRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserGarouRepository::class)]
class UserGarou
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomUser = null;

    #[ORM\ManyToOne(inversedBy: 'userGarous')]
    private ?role $userRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(?string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getUserRole(): ?role
    {
        return $this->userRole;
    }

    public function setUserRole(?role $userRole): self
    {
        $this->userRole = $userRole;

        return $this;
    }
}
