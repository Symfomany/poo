<?php

namespace App\Export;


/**
 * Class AbstractFactory
 * @package App\Export
 */
abstract class AbstractFactory{


    /**
     * Handle creation of Produt
     * @return mixed
     */
    abstract public function createProduct($title, $prixHT, $reference);


    /**
     * Handle creation of Category
     * @return mixed
     */
    abstract public function createCategory($title, $description);







}






