<?php

$l = 'TheQuickBrownFoxJumped';

$N = strlen($l);


function rotate_string($l, $N)
{
    echo $l . PHP_EOL;
    for ($i = 0; $i < $N; $i++) {

        $last = strlen($l);
        {
            $ll = substr($l, $last -1, 1) . substr($l, 0, $last -1) ;
        }
            echo $ll . PHP_EOL;
            $l = $ll;
        }
}

rotate_string($l, $N);



/*
 * testi:
 * Codingame
 * XP
 * TheQuickBrownFoxJumped
 * AAAAAAA
 */
