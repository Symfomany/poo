<?php

namespace App\Commercial\Parts;

/**
 * Class Product
 * @package App\Commercial\Parts
 */
class Product extends  AbstractProduct{

    /**
     * @var
     */
    protected $quantity;

    /**
     * @var
     */
    protected $visible;



    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }



    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }











}




