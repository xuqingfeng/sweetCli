<?php

require_once __DIR__ . "/../src/Cli.php";

use Sweet\Cli;

echo Cli::stylize("sweetCli", "black", "white");
echo Cli::stylize("sweetCli", "underlineMagenta", "cyan");
echo Cli::stylize("sweetCli", "boldWhite", "yellow");
echo Cli::stylize("sweetCli", "boldRed", "white");
echo Cli::stylize("sweetCli", 'white');

//echo Cli::stylize("sweetCli", "black", "white");
//echo Cli::stylize("sweetCli", "underlineMagenta", "cyan");
//echo Cli::stylize("sweetCli", "lightWhite", "yellow");
//
//echo Cli::stylize("sweetCli", 'white');
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo Cli::danger('sweetCli').PHP_EOL;
echo Cli::warning('sweetCli').PHP_EOL;
echo Cli::primary('sweetCli').PHP_EOL;
echo Cli::info('sweetCli').PHP_EOL;
echo Cli::success('sweetCli').PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

echo Cli::stylize("sweetCli", "black", "white");
echo Cli::stylize("sweetCli", "underlineMagenta", "cyan");
echo Cli::stylize("sweetCli", "boldWhite", "yellow");
echo Cli::stylize("sweetCli", "boldRed", "white");
echo Cli::stylize("sweetCli", 'white');