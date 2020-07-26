<?php

namespace App;

class CountingBits
{
    public static function solve($num)
    {
        $bits = to_binary($num); // OR decbin($num);

        return count(array_filter(str_split($bits), function ($bit) {
            return $bit === "1";
        }));
    }
}
