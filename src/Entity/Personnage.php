<?php

namespace App\Entity;

use App\Repository\PersonnageRepository;
use Doctrine\ORM\Mapping as ORM;

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

    public int $vote = 0;

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
     * Get the value of vote
     */ 
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */ 
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    public function getVoted($vote){
        $vote ++;
    }
    public function resetVote($vote){
         $vote = 0;
    }
    public function returnVote($vote){
        return $vote;
    }
    

}
