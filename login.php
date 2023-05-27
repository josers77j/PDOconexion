<?php 
class Login{
    public $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function login($usuario,$password){    
        try {
            $query = "SELECT * FROM usuarios WHERE username = :usuario AND password = :password";
            $pdo = $this->conexion->getConnection();
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
        if ($stmt->rowCount() == 1) {
            return true;
        }else{
            return false;
        }
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
            return false;
        }
    }
}



?>