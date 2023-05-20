<?php
class config{
    private $servidor;
    private $db;
    private $usuario;
    private $pwd;
    private $conexion;
    public function __construct($servidor, $db, $usuario, $pwd)
    {
        $this->servidor = $servidor;
        $this->db = $db;
        $this->usuario = $usuario;
        $this->$pwd = $pwd;
    }

    public function conectar(){
        try {
            $opcion = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->conexion = new PDO('mysql:host='.$this->servidor.'; db='.$this->db,$this->usuario,$this->pwd,$opcion);
            if ($this->conexion) {
                echo "conectado correctamente";
            }
            else{
                echo "no se pudo conectar";
            }
        } catch (PDOException $e) {
            echo "error de conexion " . $e->getMessage();
            die();
        }
    }

    public function desconectar(){
        $this->conexion = null;
        echo "se ha desconectado";
    }

}


$host = "localhost";
$db = "veterinaria";
$usuario = "root";
$pwd = "";


?>