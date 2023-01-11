<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PersonnageRepository;
use Doctrine\ORM\EntityManagerInterface;

#[ORM\Entity(repositoryClass: PersonnageRepository::class)]
class Personnage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name_pers = null;

    #[ORM\Column]
    private ?bool $life = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\ManyToOne(inversedBy: 'personnages')]
    private ?carte $carte = null;


    private ?int $nbvote = 0;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePers(): ?string
    {
        return $this->name_pers;
    }

    public function setNamePers(string $name_pers): self
    {
        $this->name_pers = $name_pers;

        return $this;
    }

    public function isLife(): ?bool
    {
        return $this->life;
    }

    public function setLife(bool $life): self
    {
        $this->life = $life;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCarte(): ?carte
    {
        return $this->carte;
    }

    public function setCarte(?carte $carte): self
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbvote(): ?int
    {
        return $this->nbvote;
    }

    /**
     * @param int|null $nbvote
     */
    public function setNbvote(?int $nbvote): void
    {
        $this->nbvote = $nbvote;
    }

    public function getVoted(?int $nbvote){
        $nbvote ++;
    }

    public function resetVote(?int $nbvote){
         $nbvote = 0;
    }
    
    
    public function giveCard($listPerso)
    {
      $salut = PersonnageRepository::findAllPersonnage();
      $tableauIdCarte = array(1,1,2,2,2,2,2,3);
      foreach ($listPerso as $perso) {
        $taille = sizeof($tableauIdCarte);
        $i = rand(0,$taille);
        $perso.setCarte() = $tableauIdCarte[$i];
        unset($tableauIdCarte[$i]);
      }
    }

  }
