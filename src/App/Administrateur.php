<?php

namespace Application;


/**
 * Class Administrateur
 * @package Application
 */
class Administrateur extends Editeur
{

    /**
     * @var
     */
    protected $avatar;


    /**
     * @var
     */
    protected $etoiles;


    /**
     * @param $nom
     * @param $prenom
     * @param string $edition
     * @param string $biography
     * @param $avatar
     * @param $etoiles
     */
    public function __construct($nom, $prenom, $edition = '', $biography = '', $avatar, $etoiles)
    {
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
     * @param $avatar
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
     * @param $etoiles
     */
    public function setEtoiles($etoiles)
    {
        $this->etoiles = $etoiles;
    }

    /**
     * @param User $user
     */
    public function moderer(User $user)
    {
    }
}
