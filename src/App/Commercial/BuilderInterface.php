<?php

namespace App\Commercial;

/**
 * Interface BuilderInterface
 * @package App\Commercial
 */
interface BuilderInterface{

    public function enable();

    public function addImages();

    public function addCategory();

    public function addDeclinaisons();

    public function quantity();

    public function getProduct();

    public function createProduct();

}









