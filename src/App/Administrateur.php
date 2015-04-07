<?php

namespace App;

/**
 * Class Administrateur
 * @package classes
 */
class Administrateur extends Editeur {



    /**
     * Image d'Avatar
     * @var
     */
    protected $avatar;

    /**
     * Nb Etoiles
     * @var
     */
    protected $etoiles;



    /**
     * Constructeur
     */
    public function __construct($nom, $prenom, $edition = "", $biography = "",$avatar, $etoiles ){

        parent::__construct($nom, $prenom, $edition, $biography);
        $this->avatar = $avatar;
        $this->etoiles = $etoiles;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getEtoiles()
    {
        return $this->etoiles;
    }

    /**
     * @param mixed $etoiles
     */
    public function setEtoiles($etoiles)
    {
        $this->etoiles = $etoiles;
    }

    /**
     * Moderer un user
     * @param User $user
     */
    public function moderer(User $user){

    }





} 