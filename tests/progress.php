<?php

$loader = require __DIR__."/../vendor/autoload.php";
$loader->add('Sweet\Cli', __DIR__);

use Sweet\Cli;

for ($i = 0; $i <= 100; $i += 5) {
    Cli::progress($i);
    usleep(100000);
}