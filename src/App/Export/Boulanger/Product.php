<?php

namespace App\Export\Boulanger;


use App\Export\Product as BaseProduct;

/**
 * Class Product
 * @package App\Export\Boulanger
 */
class Product extends BaseProduct{


    /**
     * Affiche le produit chez Boulanger
     * @return string
     */
    public function vente(){

        return "Le produit chez Boulanger est ".$this->getTitle();
    }


}


