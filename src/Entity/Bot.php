<?php

namespace App\Entity;

use App\Repository\BotRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BotRepository::class)]
class Bot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomBot = null;

    #[ORM\ManyToOne(inversedBy: 'bots')]
    private ?role $botRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBot(): ?string
    {
        return $this->nomBot;
    }

    public function setNomBot(string $nomBot): self
    {
        $this->nomBot = $nomBot;

        return $this;
    }

    public function getBotRole(): ?role
    {
        return $this->botRole;
    }

    public function setBotRole(?role $botRole): self
    {
        $this->botRole = $botRole;

        return $this;
    }
}
