<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt as getName;

function run()
{
    line('Welcome to the Brain Game!');
    $name = getName('May I have your name?');
    line("Hello, %s!", $name);
}
