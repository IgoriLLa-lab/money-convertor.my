<?php

namespace exception;

class BigNumberException extends \Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}