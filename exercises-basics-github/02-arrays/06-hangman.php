<?php

declare(strict_types=1);

$words = ['dracula', 'superman', 'spongebob'];

$word = $words[rand(0, count($words) - 1)];

echo $word . PHP_EOL; //cheat

$tries = 3;

$game = true;

$miss = '';

$letter = '';

$pos = '';

$guessedLetters = [];

startGame($word);


while ($game != false) {
    $guess = userInput();
    $pos = checkGuess($guess, $word, $miss);
    printScreen($word, $pos);
    pushArray($guessedLetters, $pos);
    checkTries($tries);
    checkGame();
};

function startGame($printWord)
{
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n\n";
    echo 'Word: ';
    for ($i = 0; $i < strlen($printWord); $i++) {
        echo '_ ';
    }

echo "\n\n";
echo "Misses: \n\n";
echo "Guess: \n\n";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n";
}

function printScreen($printWord, $pos)
{
    $miss = '';
    $guess = '';
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n\n";
    echo 'Word: ';
    $letter = substr("$printWord", $pos, 1);
    for ($i = 0; $i < strlen($printWord); $i++) {
        foreach ($pos as $position) {
            if ($i == $position) {
            echo "$letter ";
        } else {
            echo '_ ';
        }
    }
    }
    echo "\n\n";
    echo "Misses: $miss \n\n";
    echo "Guess: $guess  \n\n";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n";
}

function userInput()
{
    $guess = "";
    while (strlen($guess) != 1) {
        $guess = readline("Guess any letter of the word: \n");
    }
    return $guess = strtolower($guess);
}

function checkGuess($guess, $word, $miss)
{
    $pos = strpos("$word", "$guess");
    if ($pos != false) {
        return $pos;
    } else {
        return $miss = $miss . $guess; //parbaudi
    }
}

function checkTries($tries)
{
    echo "You have $tries tries left \n";
}

function pushArray($guessedLetters, $guessedLetter)
{
    array_push($guessedLetters, $guessedLetter);
    var_dump($guessedLetters);
}

function checkGame()
{
    return $gameStatus = true;
}