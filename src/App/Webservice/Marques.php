<?php

namespace App\Webservice;


/**
 * Class Marques
 */
class Marques implements RendererInterface
{

    protected $title;

    protected $description;



    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }


    public function renderProduct(){

        return array(
            "title" => $this->title,
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


}
