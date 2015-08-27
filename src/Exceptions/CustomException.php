<?php

namespace Exceptions;

/**
 * Class CustomException.
 */
class CustomException extends \RuntimeException
{
    /**
     * @var string statusCode
     */
    private $statusCode;

    /**
     * @var array headers
     */
    private $headers;

    /**
     * Consructor.
     *
     * @param string     $statusCode
     * @param null       $message
     * @param \Exception $previous
     * @param array      $headers
     * @param int        $code
     */
    public function __construct($statusCode, $message = null, \Exception $previous = null, array $headers = array(), $code = 0)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get Status Code.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * get Headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
