<?php

namespace App;

/**
 * 1 fichier = 1 classe
 * Nom du fichier = Nom de la classe
 * Class User.
 */
class User
{
    protected $lastname;

    protected $firstname;

    protected $age;

    protected $email;

    protected $ville;

    // attribut de classe peut être initialisé lors de sa déclaration
    protected $activation = true;

    protected $panier = array();

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     *
     */
    public function sinscrire()
    {
        return " L'utilisateur ".$this->nom." s'est inscrit avec l'adresse: ".$this->email;
    }

    /**
     * méthode = VILLE MAIL AGE.
     */
    public function inscriptionNewsletter()
    {
        return "<br /> L'utilisateur habite ".$this->city." avec l'email : ".$this->email.' Il a '.$this->age;
    }

    public function augmenterAge()
    {
        $this->age = $this->age + 1;
    }

    /**
     * @param $item
     */
    public function ajouterPanier($item)
    {
        $this->panier = array_push($this->panier, $item);
    }

    public function ecrire(User $user)
    {
        return $this->firstname.' '.$this->lastname.' a écris à '.$user->firstname.' '.$user->lastname;
    }

    public function commenter(User $user, $comment = 'Commentaire par dafaut')
    {
        return '<h2>'.$this->prenom.' '.$this->nom.' a écris '.$comment.' a '.$user->prenom.' '.$user->nom.'</h2>';
    }
}
