<?php

namespace App\Entity;

use App\Entity\Personnage;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LoupgarouRepository;
use Doctrine\Persistence\ManagerRegistry;


#[ORM\Entity(repositoryClass: LoupgarouRepository::class)]
class Loupgarou extends Personnage
{
    public function devour($listpersonnage) {
        //liste des personnages et regarder le nombre de vote
        //getNbvote en parcourant la liste
        $id = $listpersonnage->getId();
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            UPDATE personnage SET life = 0
            WHERE id = :id
            ';
        $stmt = $conn->prepare($sql);
        $stmt->executeQuery(['id' => $id]);
    }
}