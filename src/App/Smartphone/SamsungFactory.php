<?php

namespace App\Smartphone;


/**
 * Class AppleFactory
 * @package App\Smartphone
 */
class SamsungFactory extends AbstractFactoryMethod{


    public function createSmartphone($coque, $couleur, $capacite, $poid)
    {

       switch($capacite){
           case 32:
               return new GalaxyNote($couleur, $capacite, $poid);
               break;
           case 16:
               return new GalaxyS($couleur, $capacite, $poid);
               break;
           default:
               throw new \Exception("{$capacite} n'est pas reconnue. ");

       }

    }


}















