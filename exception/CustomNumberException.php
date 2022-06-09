<?php

namespace exception;


use Exception;

class CustomNumberException extends Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}