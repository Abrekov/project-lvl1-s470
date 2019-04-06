<?php
namespace BrainGames\games\prime;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function gamePrime()
{
    $getQuestionAndCorrectanswer = function () {
        $question = rand(2, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, (string)$correctAnswer];
    };
    run(GAME_DESCRIPTION, $getQuestionAndCorrectanswer);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= floor($number / 2); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
