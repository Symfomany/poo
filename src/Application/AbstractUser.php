<?php

namespace Application;

use Application\Interfaces\ActivationInterface;
use Application\Interfaces\InscriptionInterface;

/**
 * Class AbstractUser.
 */
abstract class AbstractUser  implements ActivationInterface, InscriptionInterface
{
    /**
     * Nom.
     *
     * @var
     */
    protected $nom;

    /**
     * Prenom.
     *
     * @var
     */
    protected $prenom;

    /**
     * Email.
     *
     * @var
     */
    protected $email;

    /**
     * Mdp.
     *
     * @var
     */
    protected $mdp;

    /**
     * Mdp.
     *
     * @var
     */
    protected $enabled;

    /**
     * Type de personnes.
     */
    const TYPE = 'Humain';

    /**
     * @return mixed
     */
    abstract public function getEnabled();

    /**
     * @param $enabled
     *
     * @return mixed
     */
    abstract public function setEnabled($enabled);

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
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
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Is Banned User.
     *
     * @return mixed
     */
    public function getBanned()
    {
        return true;
    }

    /**
     * @param $banned
     *
     * @return mixed
     */
    public function setBanned($banned)
    {
        return true;
    }

    /**
     * Is LOcked User.
     *
     * @return mixed
     */
    public function getLocked()
    {
        return true;
    }

    /**
     * @param $locked
     *
     * @return mixed
     */
    public function setLocked($locked)
    {
        return true;
    }

    /**
     * Get DateTime when created User.
     *
     * @return mixed
     */
    public function getDateCreated()
    {
        return true;
    }

    /**
     * Set DateTime when created User.
     *
     * @param \DateTime $datetime
     *
     * @return mixed
     */
    public function setDateCreated(\DateTime $datetime)
    {
        return true;
    }

    /**
     * Get DateTime when updated User.
     *
     * @return mixed
     */
    public function getDateUpdated()
    {
        return true;
    }

    /**
     * Set DateTime when updated User.
     *
     * @param \DateTime $datetime
     *
     * @return mixed
     */
    public function setDateUpdated(\DateTime $datetime)
    {

        return true;
    }

    /**
     * To define echo $obj.
     *
     * @return mixed
     */
    abstract public function __toString();

    /**
     * Get all caracteristiques.
     */
    public function getCaracteristiques()
    {
        echo '<h3>Toutes les caractéristiques de '.$this->nom.'</h3>';

        echo '<ul>';

        foreach ($this as $attribut => $valeur) {
            echo '<li><strong>', $attribut, '</strong> => ', $valeur, '</li>';
        }

        echo '</ul>';
    }
}
