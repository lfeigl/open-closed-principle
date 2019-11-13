<?php

class Washer implements ControllableInterface
{
    public function on() {
        echo 'Washer is on.' . PHP_EOL;
    }

    public function off() {
        echo 'Washer is off.' . PHP_EOL;
    }
}
