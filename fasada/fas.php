<?php
include 'so.php';
include 'nade.php';

class fasada{
    
    /**
     * vypíše výsled sčítání
     */

    public static function echoSoucet($a, $b){
        echo citani::pricitani($a, $b);
    }

     /**
     * vypíše výsled odčítaní
     */
    public static function echoRozdil($a, $b){
        echo citani::odcitani($a, $b);
    }

     /**
     * vypíše výsled násobení
     */
    public static function echoSoucin($a, $b){
        echo nasoby::nasobeni($a, $b);
    }

     /**
     * vypíše výsled dělení
     */
    public static function echoPodil($a, $b){
        echo nasoby::deleni($a, $b);
    }
}