<?php
namespace BrainGames\games\gcd;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd($number1, $number2)
{
    if ($number2 === 0) {
        return abs($number1);
    }
    return getGcd($number2, $number1 % $number2);
}

function playGcd()
{
    $generateQuestionAndCorrectanswer = function () {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $question = "{$number1} {$number2}";
        $correctAnswer = (string) getGcd($number1, $number2);
        return [$question, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $generateQuestionAndCorrectanswer);
}
