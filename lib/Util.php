<?php

/**
 * Class Util
 */
class Util{

    /**
     * Camelize
     * @param $id
     * @return string
     */
    public static function camelize($id)
    {
        return strtr(ucwords(strtr($id, array('_' => ' ', '.' => '_ ', '\\' => '_ '))), array(' ' => ''));
    }


}