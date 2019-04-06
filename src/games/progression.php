<?php
namespace BrainGames\games\progression;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const LENGTH = 10;

function gameProgression()
{
    $generateQuestionAndCorrectanswer = function () {
        $beginOfSequence = rand(1, 100);
        $step = 2;
        $correctAnswer = rand(0, LENGTH - 1) * $step + $beginOfSequence;
        $question = getQuestion($beginOfSequence, $step, LENGTH, $correctAnswer);
        return [$question, (string)$correctAnswer];
    };
    run(GAME_DESCRIPTION, $generateQuestionAndCorrectanswer);
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
