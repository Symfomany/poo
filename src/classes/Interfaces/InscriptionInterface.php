<?php
namespace classes\Interfaces;

/**
 * Interface InscriptionInterface
 * @package classes\Interfaces
 */
interface InscriptionInterface{

    /**
     * Get DateTime when created User
     * @return mixed
     */
    public function getDateCreated();

    /**
     * Set DateTime when created User
     * @param \DateTime $datetime
     * @return mixed
     */
    public function setDateCreated(\DateTime $datetime);

    /**
     * Get DateTime when updated User
     * @return mixed
     */
    public function getDateUpdated();

    /**
     * Set DateTime when updated User
     * @param \DateTime $datetime
     * @return mixed
     */
    public function setDateUpdated(\DateTime $datetime);


}