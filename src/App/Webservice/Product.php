<?php

namespace App\Webservice;


/**
 * Class Product
 */
class Product implements RendererInterface
{

    protected $title;

    protected $description;

    protected $prix;


    public function __construct($title, $description, $prix){
        $this->title = $title;
        $this->description = $description;
        $this->prix = $prix;
    }


    public function renderProduct(){

        return array(
            "title" => $this->title,
            "prix" => $this->prix
        );
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }





}
