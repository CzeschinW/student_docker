<?php
//Deal a "card" with a random value between 1 and 10, and return the value
function drawMain(){
    $card = 0;

    $card = random_int(1, 10);

    return $card;
}

function drawSide(){
    $cards = [];

    for($i = 0; $i < 3; $i++){
        $cards[] = random_int(-5, 5);
    }
    print($cards[0]);
    print ", ";
    print($cards[1]);
    print", ";
    print($cards[2]);
}