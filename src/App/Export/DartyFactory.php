<?php

namespace App\Export;


/**
 * Class DartyFactory
 * @package App\Export
 */
class DartyFactory extends AbstractFactory{


    /**
     * Handle creation of Produt
     * @return mixed
     */
    public function createProduct($title, $prixHT, $reference)
    {
        return new Darty\Product($title, $prixHT, $reference);
    }

    /**
     * Handle creation of Category
     * @return mixed
     */
    public function createCategory($title, $description)
    {
        return new Darty\Category($title, $description);
    }


}






