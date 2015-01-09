<?php

require_once __DIR__."/../src/Cli.php";

use Sweet\Cli;

for($i=0;$i<=100;$i+=5){
    Cli::progress($i);
    usleep(100000);
}