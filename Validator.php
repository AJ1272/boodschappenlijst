<?php

class Validator{

    public static function checkstring($value, $min = 1, $max = INF){
        $value = strlen(trim($value));
        return ($value >= $min && $value <= $max);
    }

    public static function checkinteger($value, $min = 0, $max = INF){
        return ($value >= $min && $value <= $max);
    }

    public static function checkdecimal($value, $min = 0, $max = INF){
        return ($value >= $min && $value <= $max);
    }

}