<?php
include_once 'db.php';
class User extends DB{
    private $nombre;
    private $username;
//saber si el usuario existe

    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE codigoUCC = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    //asignar las variables del objeto usuario

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE codigoUCC = :user');
        $query->execute(['user' => $user]);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombres'];
            $this->username = $currentUser['codigoUCC'];
        }
    }
    //obtener nombre

    public function getNombre(){
        return $this->nombre;
        
    }

    public function getCodigo(){
        return $this->username;
        
    }
}


?>