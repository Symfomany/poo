<?php

namespace App\Smartphone;


/**
 * Class GalaxyS
 * @package App\Smartphone
 */
class GalaxyS implements SmartphoneInterface{

   protected $couleur;
   protected $capacite;
   protected $poid;


    public function __construct($couleur, $capacite, $poid){

        $this->couleur = $couleur;
        $this->capacite = $capacite;
        $this->poid = $poid;
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
    }

    public function setCapacity($capacity)
    {
        // TODO: Implement setCapacity() method.
    }

    public function setWeight($weight)
    {
        // TODO: Implement setWeight() method.
    }


}















