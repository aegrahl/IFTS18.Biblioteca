<?php

class BD{
    private static $instancia=NULL;

    public static function crearInstancia(){
        if ( !isset(self::$instancia)){
            
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            //PruebaBD serverCloud
            self::$instancia= new PDO('mysql:host=bcq7ybxkczv8vumgdtzh-mysql.services.clever-cloud.com;
                                       dbname=bcq7ybxkczv8vumgdtzh','ucqk18sstrokeatm','ET4EZCQU0TIbeoNadcnN',$opcionesPDO);

            // self::$instancia= new PDO('mysql:host=localhost;dbname=biblio','root','',$opcionesPDO);
        }
        return self::$instancia;
    }

}

?>