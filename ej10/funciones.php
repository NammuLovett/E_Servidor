<?php

function randomGen($min = 100, $max = 999, $quantity = 54)
{
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
