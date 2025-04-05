<?php

class Conexion {
    public $conexion;
    public function conectar() {
        try {
            $dsn = "mysql:host=localhost;dbname=".DB_NAME;
            $opcones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => true
            );
            $this->conexion = new PDO($dsn, DB_USER, DB_PASSWORD);
            echo "existo";
            return $this->conexion;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function desconectar() {
        $this->conexion = null;
    }
    
}
