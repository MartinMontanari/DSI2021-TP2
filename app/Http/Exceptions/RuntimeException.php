<?php


namespace App\Http\Exceptions;


class RuntimeException extends \Exception implements \Throwable
{
    private $messages;

    /**
     * ResultNotFoundException constructor.
     * @param array $message
     * @param int $code
     */
    public function __construct($message = [], $code)
    {
        $this->messages = $message;
        parent::__construct('', $code);
    }

    /**
     * @return array|mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
