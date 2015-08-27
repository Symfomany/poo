<?php

namespace App\Commercial\Parts;

/**
 * Class AbstractProduct
 * @package App\Commercial\Parts
 */
abstract class AbstractProduct{

    /**
     * @var tableau d'objet
     */
    protected  $data;

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setCaracteristique($key, $value)
    {
        $this->data[$key] = $value;
    }







}




