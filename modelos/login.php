<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Login{

public $user;
public $password;

function __construct($user,$password){
$this->user = $user;
$this->password = $password;
}

public function verifyUser(){
    
    $connectionBD=BD::crearInstancia();
    try{
        $sql = $connectionBD->query("SELECT * FROM usuarios WHERE email = '$this->user' AND password = '$this->password'");
        $result = $sql->fetchAll(PDO::FETCH_OBJ);
        if($result != null){
            if($result[0]->id_usuario != null){
            return true;
            }
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    } finally{
        $connectionBD = null;
    }
}

}