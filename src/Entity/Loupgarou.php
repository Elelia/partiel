<?php

namespace App\Entity;

use App\Repository\LoupgarouRepository;
use Doctrine\ORM\Mapping as ORM;

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