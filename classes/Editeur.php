<?php

namespace classes;

use classes\User;

/**
 * Class Editeur
 * @package classes
 */
class Editeur extends User {


    /**
     * Maison Edition
     * @var
     */
    protected $edition;

    /**
     * Biography
     * @var
     */
    protected $biography;


    /**
     * Constructeur
     * @param $nom
     * @param $prenom
     * @param $edition
     * @param $biography
     */
    public function __construct($nom, $prenom, $edition, $biography){
        parent::__construct($nom, $prenom);
        $this->edition = $edition;
        $this->biography = $biography;
    }

    /**
     * @return mixed
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param mixed $biography
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    /**
     * @return mixed
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param mixed $edition
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }


    /**
     * Editer un article
     * @param $article
     * @return string
     */
    public function editer($article){

        return "J'edite un article " . $article . " de presse...";
    }


    /**
     * Publier un article
     * @param $article
     * @param $maisonpresse
     * @return string
     */
    public function publier($article, $maisonpresse){

        return "Je publie l'article " . $maisonpresse . " de presse dans la maison de presse "  . $maisonpresse;
    }




} 