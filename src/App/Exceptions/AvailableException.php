<?php

namespace App\Exceptions;

/**
 * Class AvailableException.
 */
class AvailableException extends \Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "Erreur de disponibilité: ".$this->message;
    }


}
