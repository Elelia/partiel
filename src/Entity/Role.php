<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomRole = null;

    #[ORM\OneToMany(mappedBy: 'userRole', targetEntity: UserGarou::class)]
    private Collection $userGarous;

    public function __construct()
    {
        $this->userGarous = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRole(): ?string
    {
        return $this->nomRole;
    }

    public function setNomRole(string $nomRole): self
    {
        $this->nomRole = $nomRole;

        return $this;
    }

    /**
     * @return Collection<int, UserGarou>
     */
    public function getUserGarous(): Collection
    {
        return $this->userGarous;
    }

    public function addUserGarou(UserGarou $userGarou): self
    {
        if (!$this->userGarous->contains($userGarou)) {
            $this->userGarous->add($userGarou);
            $userGarou->setUserRole($this);
        }

        return $this;
    }

    public function removeUserGarou(UserGarou $userGarou): self
    {
        if ($this->userGarous->removeElement($userGarou)) {
            // set the owning side to null (unless already changed)
            if ($userGarou->getUserRole() === $this) {
                $userGarou->setUserRole(null);
            }
        }

        return $this;
    }
}
