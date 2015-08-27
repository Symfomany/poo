<?php

namespace App\Exceptions;



/**
 * Class AvailableException.
 */
class StringException extends \Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "Erreur de chaine de caractères: ".$this->message;
    }

}
