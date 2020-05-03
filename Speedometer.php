<?php

class Speedometer {

    public const km = 0.621371;
    public const miles = 1.609344;

    public static function convertKm ($km) {
        $result = $km * self ::km;
        return $result;
    }

    public static function convertMiles ($Miles) {
        $result = $Miles * self::miles;
        return $result;
    }
}
