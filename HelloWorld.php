<?php

namespace redecs;

class HelloWorld
{
    private $message = 'Hello world';

    public function __construct($message = null) {
        if($message !== null) {
            $this->messagee = $message;
        }
    }

    public function __toString() {
        return $this->message;
    }

    public function display() {
        echo $this->message;
    }
}
