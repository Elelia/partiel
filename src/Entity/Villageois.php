<?php

namespace App\Entity;




class  Villageois extends Personnage
{
  //villageois does nothing at night
  public function nightAction(){
    return false;
  }
  
}