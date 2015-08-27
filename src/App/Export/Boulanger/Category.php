<?php

namespace App\Export\Boulanger;


use App\Export\Category as BaseCategory;

/**
 * Class Product
 * @package App\Export\Boulanger
 */
class Category extends BaseCategory{



    /**
     * Affiche la catégorie chez Boulanger
     * @return string
     */
    public function vente(){

        return "La catégorie chez Boulanger est ".$this->getTitle();
    }


}


