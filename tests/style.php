<?php

require_once __DIR__ . "/../src/Cli.php";

use Sweet\Cli;

echo Cli::stylize("sweetCli", "black", "white");
echo Cli::stylize("sweetCli", "underlineMagenta", "cyan");
echo Cli::stylize("sweetCli", "boldWhite", "yellow");
echo Cli::stylize("sweetCli", "boldRed", "white");
echo Cli::stylize("sweetCli", 'white');
