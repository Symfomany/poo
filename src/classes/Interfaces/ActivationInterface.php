<?php
namespace classes\Interfaces;

/**
 * Interface ActivationInterface
 * @package classes\Interfaces
 */
interface ActivationInterface{

    /**
     * Is Active User
     * @return mixed
     */
    public function getEnabled();

    /**
     * @param $enabled
     * @return mixed
     */
    public function setEnabled($enabled);

    /**
     * Is Banned User
     * @return mixed
     */
    public function getBanned();

    /**
     * @param $banned
     * @return mixed
     */
    public function setBanned($banned);

    /**
     * Is LOcked User
     * @return mixed
     */
    public function getLocked();

    /**
     * @param $locked
     * @return mixed
     */
    public function setLocked($locked);


}