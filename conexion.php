<?php

class BD{
    private static $instancia=NULL;
    
    public static function crearInstancia(){
        
        Include_once('env.php');
        if ( !isset(self::$instancia)){
            
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            
            //Instancia MySQL en ServerCloud
            self::$instancia= new PDO( "mysql:host=$DB_HOST;dbname=$DB_DATABASE", $DB_USERNAME,$DB_PASSWORD, $opcionesPDO);


        }
        return self::$instancia;
    }
    
}

?>