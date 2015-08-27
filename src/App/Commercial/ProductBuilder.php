<?php

namespace App\Commercial;



use App\Commercial\Parts\Product;
use App\Declinaisons;
use App\Export\Darty\Category;
use App\Images;


class ProductBuilder implements  BuilderInterface{


    protected $product;

    public function enable()
    {
        $this->product->setVisible(true);
    }

    public function addImages()
    {
        $this->product->setCaracteristique(
            "images", new Images()
        );
    }

    public function addCategory()
    {
        $this->product->setCaracteristique(
            "category", new Category("Smartphone", "Tous les smartphones")
        );
    }

    public function addDeclinaisons()
    {
        $this->product->setCaracteristique('declinaisons',
            [new Declinaisons(),new Declinaisons()]
        );
    }

    public function quantity()
    {
        $this->product->setQuantity(1);
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function createProduct()
    {
        $this->product = new Product();
    }


}









