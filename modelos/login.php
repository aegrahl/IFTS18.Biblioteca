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
        $connectionBD = BD::crearInstancia();
        $sql = $connectionBD->prepare("SELECT * FROM usuarios where email=?;");
        $sql->execute([$this->user]);
        $result = $sql->fetchall(PDO::FETCH_OBJ);
        if (!$result) {
            echo '<p class="error">Usuario erroneo!</p>';
        } else {
            // ponerlo despues if (password_verify($password, $result['password'])) {
            if ($this->password == $result[0]->password) {
                $_SESSION['id_usuario'] = $result[0]->id_usuario;
                $_SESSION['nombre'] = $result[0]->nombre;
                $_SESSION['rol'] = $result[0]->rol;
                return true;
            } else {
                return false;
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    } finally{
        $connectionBD = null;
    }
}

}