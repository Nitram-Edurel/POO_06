<?php

Class Speedometer
{
    public const KM = 1;
    public const MILES = 0.621;

    public static function convertKMtoMILES(int $km): ?float
    {
        return $km * self::KM;
    }

    public static function convertMILEStoKM(int $miles): ?float
    {
        return $miles * self::MILES;
    }
}