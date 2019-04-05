<?php

namespace BrainGames\Cli;
use BrainGames\games\even;
use function \cli\line;
use function \cli\prompt as getName;
use function \cli\prompt as getAnswer;

const ROUNDSOFGAME = 3;
function run($gameDescription, $questionAndCorrectAnswer)
{
    line('Welcome to the Brain Games!');
    line($gameDescription);
    $name = getName('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < ROUNDSOFGAME; $i++) {
        [$question, $correctAnswer] = $questionAndCorrectAnswer();
        line("Question: {$question}");
        $answer = getAnswer('Your answer');

        if ($answer !== $correctAnswer) {
            line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line('Correct!');
        }
    }
    line("Congratulations, {$name}!");
}
