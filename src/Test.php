<?php

require 'Control.php';
require 'ControllableInterface.php';
require 'Light.php';
require 'Washer.php';

$control = new Control;
$light = new Light;
$washer = new Washer;

$control->connect($light);

$control->turnOn();
$control->turnOff();

$control->connect($washer);

$control->turnOn();
$control->turnOff();
