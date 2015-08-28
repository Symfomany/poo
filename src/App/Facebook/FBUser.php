<?php

namespace App\Facebook;

/**
 * Class FBUser
 * @package App\Facebook
 */
class FBUser implements UserInterface{


    protected $email;
    protected $age;

    /**
     * Connect with FB
     * @return array
     */
    public function connect(){
        return array(
            "email" => $this->email,
            "age" => $this->age
        );
    }

    /**
     * Get All Photos
     * @return array
     */
    public function getPhotos(){
        return array(
            "https://pbs.twimg.com/media/BwqTz4NCEAAifhR.jpg",
            "http://media.nbcmiami.com/images/1234*675/chuck-norris-phone-mv.jpg",
            "http://freebeacon.com/wp-content/uploads/2013/05/Chuck-Norris-Twitter.png",
            "http://cdn.playbuzz.com/cdn/73e6646b-6a0e-43ab-8924-81c97839d0c9/73afc75f-6e12-440f-8b88-944f6341eb6f.jpg",
        );
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










