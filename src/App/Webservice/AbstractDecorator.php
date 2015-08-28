<?php

namespace App\Webservice;


abstract class AbstractDecorator implements RendererInterface{


    protected $wrapped;

    /**
     * Objet Wrapped
     * @param RendererInterface $wrapped
     */
    public function __construct(RendererInterface $wrapped){
        $this->wrapped = $wrapped;
    }





}