<?php

namespace App\Smartphone;


/**
 * Class SonyFactory
 * @package App\Smartphone
 */
class SonyFactory extends AbstractFactoryMethod{


    public function createSmartphone($coque, $couleur, $capacite, $poid)
    {

       switch($capacite){

           case 16:
               return new XperiaZ3($couleur, $capacite, $poid);
               break;
           case 32:
               return new XperiaZ2($couleur, $capacite, $poid);
               break;
           default:
               throw new \Exception("{$capacite} n'est pas reconnue ");

       }

    }


}















