<?php
namespace BrainGames\games\progression;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function gameProgression()
{
    $questionAndCorrectanswer = function () {
        $beginOfSequence = rand(1, 100);
        $step = 2;
        $length = 10;
        $correctAnswer = rand(0, $length - 1) * $step + $beginOfSequence;
        $question = getQuestion($beginOfSequence, $step, $length, $correctAnswer);
        return [$question, (string)$correctAnswer];
    };
    run(GAME_DESCRIPTION, $questionAndCorrectanswer);
}

function getQuestion($beginOfSequence, $step, $length, $correctAnswer)
{
    $endOfSequence = $beginOfSequence + $length * $step;
    for ($i = $beginOfSequence; $i < $endOfSequence; $i += $step) {
        if ($i === $correctAnswer) {
            $result = "{$result} ..";
        } else {
            $result = "{$result} {$i}";
        }
    }
    return $result;
}
