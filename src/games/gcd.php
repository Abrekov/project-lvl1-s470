<?php
namespace BrainGames\games\gcd;
use function BrainGames\Cli\run;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGreatestCommonDivisor($a, $b)
{
    if ($b === 0) {
        return abs($a);
    }
    return getGreatestCommonDivisor($b, $a % $b);
}

function gameGcd()
{
    $questionAndCorrectanswer = function () {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $question = "{$number1} {$number2}";
        $correctAnswer = (string) getGreatestCommonDivisor($number1, $number2);
        return [$question, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $questionAndCorrectanswer);
}
