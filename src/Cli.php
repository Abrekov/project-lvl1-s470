<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt as getName;
use function \cli\prompt as getAnswer;


function run()
{
    line('Welcome to the Brain Games!');
    $name = getName('May I have your name?');
    line("Hello, %s!", $name);
};
