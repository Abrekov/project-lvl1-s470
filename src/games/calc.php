<?php
namespace BrainGames\games\calc;
use function BrainGames\engine\run;

const GAME_DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
    }
}
function gameCalc()
{
    $questionAndCorrectanswer = function () {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS)];
        
        $question = "{$number1} {$operator} {$number2}";
        $correctAnswer = (string)calculate($number1, $number2, $operator);
        return [$question, $correctAnswer];
    };
    run(GAME_DESCRIPTION, $questionAndCorrectanswer);
}
