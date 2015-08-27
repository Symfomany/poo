<?php

namespace App\Export\Darty;


use App\Export\Category as BaseCategory;

/**
 * Class Product
 * @package App\Export\Darty
 */
class Category extends BaseCategory{

    /**
     * Affiche la catégorie chez Darty
     * @return string
     */
    public function vente(){

        return "La catégorie chez Darty est ".$this->getTitle();
    }


}


