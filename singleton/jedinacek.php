<?php

class single{
  
    private static $instance = null;    

    

    private function __construct()
    {
        echo "obejekt je vytvořen";   
    }
     
    /**
     * vytvoření instaci třídy, pokud ještě žádna neexistuje
     * 
     * @return objekt
     */
    public static function getinstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new single();
        }else
        {
            echo "instace už existuje";
        }
        return self::$instance;
    }
}