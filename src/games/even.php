<?php
namespace BrainGames\games\even;

use function \cli\line;
use function \cli\prompt as getName;
use function \cli\prompt as getAnswer;

function isEven(int $number)
{
    return $number % 2 === 0;
}

$roundsOfGame = 3;
function run()
{
    $roundsOfGame = 3;
    $gameDescription = 'Answer "yes" if number even otherwise answer "no".';
    $question = rand(1, 100);
    $correctAnswer = isEven($question) ? 'yes' : 'no';

    line('Welcome to the Brain Games!');
    line($gameDescription);
    $name = getName('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < $roundsOfGame; $i++) {
        line("Question: {$question}");
        $answer = getAnswer('Your answer:');

        if ($answer !== $correctAnswer) {
            line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line('Correct!');
        }
    }
    line("Congratulations, {$name}!");
};
