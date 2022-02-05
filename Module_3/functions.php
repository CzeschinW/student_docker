<?php
//Deal a "card" with a random value between 1 and 10, and return the value
function drawMain(){
    int card;

    card = random_int(1, 10);

    return card;
}

function drawSide(){
    $cards = [];

    for(int i = 0; i < 3; i++){
        $cards[] = random_int(-5, 5);
    }
    return $cards;
}