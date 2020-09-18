<?php

declare(strict_types=1);

$tic =
    [
        [
            ' ', ' ', ' '
        ],
        [
            ' ', ' ', ' '
        ],
        [
            ' ', ' ', ' '
        ]
    ];

function display_board($tic)
{
    echo "          Columns  \n";
    echo "         0   1   2 \n";
    echo "Row 0    " . $tic[0][0] . " | " . $tic[0][1] . " | " . $tic[0][2] . "\n";
    echo "        ---+---+---\n";
    echo "Row 1    " . $tic[1][0] . " | " . $tic[1][1] . " | " . $tic[1][2] . "\n";
    echo "        ---+---+---\n";
    echo "Row 2    " . $tic[2][0] . " | " . $tic[2][1] . " | " . $tic[2][2] . "\n";
}

display_board($tic);

$turn = 1;

$turnMaker = 'X';

$rowColumnO = '';
$rowColumnX = '';

$gameStatus = 0;

while ($gameStatus == 0 && $turn >= 1 && $turn <= 10) {
    if ($turn == 10) {
        echo "It's a draw \n";
        exit("Game Over! \n");
    }
    switch ($turn) {
        case $turn % 2 == 0:
            $rowColumnO = readline("Enter where you want to place O (row column): ");
            $turn++;
            $coordinates = explode(' ', $rowColumnO);
            if ($tic[$coordinates[0]][$coordinates[1]] != ' ') {
                echo "Someone took that spot already, try elsewhere \n";
                $rowColumnO = readline("Enter where you want to place O (row column): ");
            }
            $turnMaker = 'O';
            $tic[$coordinates[0]][$coordinates[1]] = $turnMaker;
            display_board($tic);
            if ($tic[0][0] == 'O' && $tic[0][1] == 'O' && $tic[0][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[1][0] == 'O' && $tic[1][2] == 'O' && $tic[1][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[2][0] == 'O' && $tic[2][1] == 'O' && $tic[2][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[0][0] == 'O' && $tic[1][0] == 'O' && $tic[2][0] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[0][1] == 'O' && $tic[1][1] == 'O' && $tic[2][1] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[0][2] == 'O' && $tic[1][2] == 'O' && $tic[2][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[0][0] == 'O' && $tic[1][1] == 'O' && $tic[2][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            if ($tic[2][0] == 'O' && $tic[1][1] == 'O' && $tic[0][2] == 'O') {
                echo "O won \n";
                $gameStatus = 1;
            }
            break;
        case $turn >= 1 && $turn <= 9:
            $rowColumnX = readline("Enter where you want to place X (row column): ");
            $turn++;
            $coordinates = explode(' ', $rowColumnX);
            if ($tic[$coordinates[0]][$coordinates[1]] != ' ') {
                echo "Someone took that spot already, try elsewhere \n";
                $rowColumnX = readline("Enter where you want to place X (row column): ");
            }
            $turnMaker = 'X';
            $tic[$coordinates[0]][$coordinates[1]] = $turnMaker;
            display_board($tic);
            if ($tic[0][0] == 'X' && $tic[0][1] == 'X' && $tic[0][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[1][0] == 'X' && $tic[1][2] == 'X' && $tic[1][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[2][0] == 'X' && $tic[2][1] == 'X' && $tic[2][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[0][0] == 'X' && $tic[1][0] == 'X' && $tic[2][0] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[0][1] == 'X' && $tic[1][1] == 'X' && $tic[2][1] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[0][2] == 'X' && $tic[1][2] == 'X' && $tic[2][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[0][0] == 'X' && $tic[1][1] == 'X' && $tic[2][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            if ($tic[2][0] == 'X' && $tic[1][1] == 'X' && $tic[0][2] == 'X') {
                echo "X won \n";
                $gameStatus = 1;
            }
            break;
    }

}








