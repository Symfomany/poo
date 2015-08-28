<?php

namespace App\Facebook;

/**
 * Class FBUserAdapter
 * @package App\Facebook
 */
class FBUserAdapter implements UserInterface {

    protected $fbuser;


    public function __construct(UserInterface $user){
        $this->fbuser = $user;
    }

    public function getEmail(){
        $this->fbuser->getEmail();
    }

    public function setEmail($email){
        $this->fbuser->setEmail($email);
    }

    public function getAge(){
        $this->fbuser->getAge();
    }

    public function setAge($age){
        $this->fbuser->setAge($age);
    }

    /*
     * Je garde la signature de l'ancienne methode getImages de User
     * Elle retourne significativement un tableau d'objet
     */
    public function getImages(){
        $images = $this->fbuser->getPhotos();

        foreach($images as $image){
            $tab[] = new Images($image);
        }

        return $tab;
    }




}










