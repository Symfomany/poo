<?php

namespace App\Export\Boulanger;


use App\Category as BaseCategory;

/**
 * Class Product
 * @package App\Export\Boulanger
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
     * Affiche la catégorie chez Boulanger
     * @return string
     */
    public function vente(){

        return "La catégorie chez Boulanger est ".$this->getTitle();
    }


}


