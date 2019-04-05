<?php
namespace BrainGames\games\calc;
use function BrainGames\Cli\run;

const GAMEDESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
            break;
        case '-':
            return $number1 - $number2;
            break;
        case '*':
            return $number1 * $number2;
            break;
    }
}
function gameCalc()
{
    $questionAndCorrectanswer = function () {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operator = OPERATORS[rand(0, 2)];
        
        $question = "{$number1} {$operator} {$number2}";
        $correctAnswer = (string)calculate($number1, $number2, $operator);
        return [$question, $correctAnswer];
    };
    run(GAMEDESCRIPTION, $questionAndCorrectanswer);
}
