<?php
namespace BrainGames\games\progression;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const LENGTH = 10;

function playProgression()
{
    $generateQuestionAndCorrectanswer = function () {
        $beginOfSequence = rand(1, 100);
        $step = 2;
        $endOfSequence = $beginOfSequence + $step * (LENGTH - 1);
        $sequence = range($beginOfSequence, $endOfSequence, $step);
        $key = array_rand($sequence);
        $question = implode(' ', array_replace($sequence, [$key => '..']));
        $correctAnswer = (string) $sequence[$key];
        return [$question, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $generateQuestionAndCorrectanswer);
}


// function playProgression()
// {
//     $generateQuestionAndCorrectanswer = function () {
//         $beginOfSequence = rand(1, 100);
//         $step = 2;
//         $correctAnswer = rand(0, LENGTH - 1) * $step + $beginOfSequence;
//         $question = getQuestion($beginOfSequence, $step, LENGTH, $correctAnswer);
//         $correctAnswer = (string) $correctAnswer;
//         return [$question, $correctAnswer];
//     };
//     run(GAME_DESCRIPTION, $generateQuestionAndCorrectanswer);
// }

// function getQuestion($beginOfSequence, $step, $length, $correctAnswer)
// {
//     $endOfSequence = $beginOfSequence + $length * $step;
//     for ($i = $beginOfSequence; $i < $endOfSequence; $i += $step) {
//         if ($i === $correctAnswer) {
//             $result = "{$result} ..";
//         } else {
//             $result = "{$result} {$i}";
//         }
//     }
//     return $result;
// }
