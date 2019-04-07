<?php
namespace BrainGames\games\progression;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const LENGTH = 10;

function playProgression()
{
    $generateQuestionAndCorrectanswer = function () {
        $beginOfSequence = rand(1, 100);
        $step = rand(1, 10);
        $endOfSequence = $beginOfSequence + $step * (LENGTH - 1);
        $sequence = range($beginOfSequence, $endOfSequence, $step);
        $key = array_rand($sequence);
        $question = implode(' ', array_replace($sequence, [$key => '..']));
        $correctAnswer = (string) $sequence[$key];
        return [$question, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $generateQuestionAndCorrectanswer);
}
