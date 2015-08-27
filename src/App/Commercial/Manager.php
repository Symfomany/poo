<?php

namespace App\Commercial;

use App\Category;

class Manager{


    /**
     * The director don't know about concrete part
     *
     * @param BuilderInterface $builder
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createProduct();
        $builder->enable();
        $builder->addCategory();
        $builder->addImages();
        $builder->addDeclinaisons();
        $builder->quantity();

        return $builder->getProduct();
    }




}











?>