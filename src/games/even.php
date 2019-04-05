<?php
namespace BrainGames\games\even;

use function BrainGames\Cli\run;

function isEven(int $number)
{
    return $number % 2 === 0;
}

const GAMEDESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function gameEven()
{
    $questionAndCorrectanswer = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    run(GAMEDESCRIPTION, $questionAndCorrectanswer);
}
