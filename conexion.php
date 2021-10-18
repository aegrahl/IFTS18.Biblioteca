<?php

class BD{
    private static $instancia=NULL;

    public static function crearInstanci(){
        if ( !isset(self::$instancia)){
            
            $opcionesPDO[PDO::ATTR_ERRORMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=localhost;dbname=biblioteca','root','Insegura123',$opcionesPDO);
            echo "conexión realizada";
        }
        return self::$instancia;
    }

}

?>