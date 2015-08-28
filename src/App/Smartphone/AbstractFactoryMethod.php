<?php

namespace App\Smartphone;


/**
 * Class AbstractFactoryMethod
 * @package App\Smartphone
 */
abstract class AbstractFactoryMethod{

    const METAL = 1;
    const PLASTIQUE = 2;


    abstract public function createSmartphone($coque, $couleur, $capacite, $poid);

}
















