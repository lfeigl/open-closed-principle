<?php

class Control
{
    private $link;

    public function connect(ControllableInterface $link) {
        $this->link = $link;
    }

    public function turnOn() {
        $this->link->on();
    }

    public function turnOff() {
        $this->link->off();
    }
}
