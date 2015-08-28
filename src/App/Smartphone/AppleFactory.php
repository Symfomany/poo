<?php

namespace App\Smartphone;


/**
 * Class AppleFactory
 * @package App\Smartphone
 */
class AppleFactory extends AbstractFactoryMethod{


    public function createSmartphone($coque, $couleur, $capacite, $poid)
    {

       switch($capacite){

           case 16:
               return new Iphone4S($couleur, $capacite, $poid);
               break;
           case 32:
               return new Iphone5S($couleur, $capacite, $poid);
               break;
           default:
               throw new \Exception("{$coque} n'est pas reconnue ");


       }

    }


}















