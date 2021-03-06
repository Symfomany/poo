<?php

namespace Application;

/**
 * Class User.
 */
class User extends AbstractUser
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
     * Enabled.
     *
     * @var
     */
    protected $enabled;

    /**
     * Constante Pays.
     */
    const PAYS = 'France';

    /**
     * Constante Formation.
     */
    const FORMATION = '3W Academy';

    /**
     * Attributs statique.
     */
    private static $langue = 'Français';

    /**
     * Constructeur.
     *
     * @param $prenom
     * @param $nom
     */
    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
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
     * Réagir  avec un commentaire.
     *
     * @param $commentaire
     *
     * @return string
     */
    public function reagir($commentaire)
    {
        return $this->prenom.' '.$this->nom.' a réagi avec mon commentaire: '.$commentaire;
    }

    /**
     * Répondre avec ParamConverter.
     *
     * @param User $user
     * @param $message
     *
     * @return string
     */
    public function repond(User $user, $message = 'Aucun message')
    {
        return $this->prenom.' '.$this->nom.' a  répondu à la réaction de '.$user->nom.' '.$user->prenom.': '.$message;
    }

    /**
     * Noter avec Objet.
     *
     * @param $note
     *
     * @return string
     */
    public function noter($note = 4)
    {
        return $this.' a noté: '.$note;
    }

    /**
     * Conversion de la note.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->nom.' '.$this->prenom;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param $enabled
     *
     * @return mixed|void
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Pays.
     *
     * @return string
     */
    public static function getPays()
    {
        return 'Tous les utilisteurs viennent de '.self::PAYS;
    }

    /**
     * Etudes.
     *
     * @return string
     */
    public static function getFormation()
    {
        return 'Tous les utilisteurs proviennent de la '.self::FORMATION;
    }

    /**
     * Etudes.
     *
     * @return string
     */
    public static function getLangue()
    {
        return 'Tous les utilisteurs parle '.self::$langue;
    }

    /**
     * Magic Setter.
     *
     * @param $nom
     * @param $valeur
     */
    public function __set($nom, $valeur)
    {
        $this->attributs[$nom] = $valeur;
    }

    /**
     * Magic Getter.
     *
     * @param $nom
     *
     * @return mixed
     */
    public function __get($nom)
    {
        if (isset($this->attributs[$nom])) {
            return $this->attributs[$nom];
        }
    }
}
