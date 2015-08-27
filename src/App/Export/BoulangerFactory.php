<?php

namespace App\Export;


/**
 * Class AbstractFactory
 * @package App\Export
 */
class BoulangerFactory extends AbstractFactory{


    /**
     * Handle creation of Produt
     * @return mixed
     */
    public function createProduct($title, $prixHT, $reference)
    {
        new Boulanger\Product($title, $prixHT, $reference);

    }

    /**
     * Handle creation of Category
     * @return mixed
     */
    public function createCategory($title, $description)
    {
        new Boulanger\Category($title, $description);

    }



}






