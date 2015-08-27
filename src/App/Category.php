<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/08/15
 * Time: 19:53
 */

namespace App;


use App\Exceptions\AvailableException;

class Category
{

    protected $title;
    protected $visible;


    /**
     * Constructor
     * @param $title
     */
    public function __construct($title = ""){
        $this->title = $title;
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
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        if($visible === false){
            throw new AvailableException($this);
        }
        $this->visible = $visible;
    }



    public function __toString(){

        return $this->getTitle();
    }






}