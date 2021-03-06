<?php

namespace Application;

/**
 * Class Moderateur.
 */
class Moderateur extends User
{
    /**
     * Niveau de modération.
     *
     * @var
     */
    protected $niveau;

    /**
     * Constructeur.
     *
     * @param $nom
     * @param $prenom
     * @param $edition
     * @param $biography
     */
    public function __construct($nom, $prenom, $niveau)
    {
        parent::__construct($nom, $prenom);
        $this->niveau = $niveau;

        //to handle 500 error
        if($this->niveau > 10){
            throw new \Exception("Le niveau  dot etre inférieur à 5");
        }
    }

    /**
     * Modérer un commentaire.
     *
     * @param $commentaire
     *
     * @return string
     */
    public function modererCommentaire($commentaire)
    {
        return $this->nom.' a modérer un commentaire: '.$commentaire;
    }

    /**
     * Moderer un utilisateur.
     *
     * @param User $user
     *
     * @return string
     */
    public function modererUser(User $user)
    {
        return $this->nom." a modérer l'utilisateur ".$user;
    }
}
