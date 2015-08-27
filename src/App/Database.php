<?php

namespace App;

/**
 * Class Database.
 */
class Database
{

    /**
     * @var \PDO
     */
    protected $connexion;


    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;


    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new Database('root', 'djscrave', 'cinema');
        }

        return static::$instance;
    }

    /**
     * Constructor
     * @param $login
     * @param $mdp
     * @param $db
     */
    public function __construct($login , $mdp, $db){

        $this->connexion= new \PDO('mysql:dbname='.$db.';host=127.0.0.1', $login, $mdp);
    }

    /**
     * @return \PDO
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * @param \PDO $connexion
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }



}
