<?php

namespace classes;

/**
 * Class AbstractUser
 * @package classes
 */
abstract class AbstractUser {


    /**
     * Nom
     * @var
     */
    protected $nom;

    /**
     * Prenom
     * @var
     */
    protected $prenom;

    /**
     * Email
     * @var
     */
    protected $email;

    /**
     * Mdp
     * @var
     */
    protected $mdp;

    /**
     * Mdp
     * @var
     */
    protected $enabled;


    public abstract function getEnabled();

    public abstract function setEnabled($enabled);




} 