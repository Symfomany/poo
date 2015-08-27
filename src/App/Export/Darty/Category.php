<?php

namespace App\Export\Darty;


use App\Category as BaseCategory;

/**
 * Class Product
 * @package App\Export\Darty
 */
class Category extends BaseCategory{


    /**
     * @param int $title
     * @param string $description
     * @param $reference
     */
    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }


    /**
     * Affiche la catégorie chez Darty
     * @return string
     */
    public function vente(){

        return "La catégorie chez Darty est ".$this->getTitle();
    }


}


