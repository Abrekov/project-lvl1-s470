<?php
namespace BrainGames\games\even;

use function BrainGames\engine\run;

function isEven(int $number)
{
    return $number % 2 === 0;
}

const GAME_DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function gameEven()
{
    $questionAndCorrectanswer = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    run(GAME_DESCRIPTION, $questionAndCorrectanswer);
}
