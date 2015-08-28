<?php

namespace App\Facebook;
use App\Facebook\Images;

/**
 * Class User
 * @package App\Facebook
 */
class User implements UserInterface{


    protected $email;
    protected $age;
    protected $images;

    /**
     * Retourne une image
     * @return mixed
     */
    public function getImages(){
        return $this->images;
    }


    public function addImage(Images $image){
        $this->images[] = $image;
    }


    public function getEmail()
    {
        return $this->email;

    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


}










