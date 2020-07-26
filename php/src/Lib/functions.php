<?php

function example()
{
    return true;
}

function div_mod($x, $y)
{
    return [intdiv($x, $y), $x % $y];
}

function to_binary($n)
{
    list($quotient, $remainder) = div_mod($n, 2);

    if ($quotient < 2) {
        return sprintf("%d%d", $quotient, $remainder);
    }

    $bits = ["$remainder"];
    while ($quotient) {
        list($quotient, $remainder) = div_mod($quotient, 2);
        array_push($bits, "$remainder");
    }

    return implode("", array_reverse($bits));
}
