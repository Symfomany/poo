<?php

namespace classes;

/**
 * Class Moderateur
 * @package classes
 */
class Moderateur extends User {


    /**
     * Niveau de modération
     * @var
     */
    protected $niveau;


    /**
     * Constructeur
     * @param $nom
     * @param $prenom
     * @param $edition
     * @param $biography
     */
    public function __construct($nom, $prenom, $niveau){
        parent::__construct($nom, $prenom);
        $this->niveau = $niveau;
        if($niveau > 10){
            trigger_error('Le modérateur ne peut se voir un niveau supérieur à 10', E_USER_WARNING);
        }
    }


    /**
     * Modérer un commentaire
     * @param $commentaire
     * @return string
     */
    public function modererCommentaire($commentaire){

        return $this->nom . " a modérer un commentaire: " . $commentaire;
    }


    /**
     * Moderer un utilisateur
     * @param User $user
     * @return string
     */
    public function modererUser(User $user){

        return $this->nom." a modérer l'utilisateur " . $user;
    }




} 