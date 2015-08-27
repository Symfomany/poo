<?php

namespace App\Export\Darty;


use App\Export\Product as BaseProduct;

/**
 * Class Product
 * @package App\Export\Darty
 */
class Product extends BaseProduct{

    /**
     * Affiche le produit chez Darty
     * @return string
     */
    public function vente(){

        return "Le produit chez Darty est ".$this->getTitle();
    }


}


