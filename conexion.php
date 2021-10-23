<?php

class BD{
    private static $instancia=NULL;

    public static function crearInstancia(){
        if ( !isset(self::$instancia)){
            
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            //Instancia MySQL en ServerCloud
            self::$instancia= new PDO('mysql:host=bs47gyztx8ksuyjwjx5n-mysql.services.clever-cloud.com;
                                       dbname=bs47gyztx8ksuyjwjx5n','u2lfvjgk7jpcxi4m','jjIApkzh48A0I6IPyZm3',$opcionesPDO);

        }
        return self::$instancia;
    }

}

?>