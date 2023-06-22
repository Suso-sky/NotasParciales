<?php
/* Esto es para que muestre los Errores en pantalla, cuando tenga */
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class modelGeneral {
    private $conn;

    public function __construct() {
        require_once '/opt/lampp/htdocs/app/config/Conexion.php';
        $this->conn = CConexion::ConexionBD();
    }

    public function createEstudiante($codEst, $nombEst) {
        // Preparar la consulta de inserción
        $query = "INSERT INTO estudiantes (cod_est, nomb_est) VALUES (:codEst, :nombEst)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':codEst', $codEst);
        $stmt->bindParam(':nombEst', $nombEst);
        return $stmt->execute();
    }

    public function getAllcursos() {
        // Preparar la consulta de inserción
        $query = "SELECT * FROM cursos";
        $stmt = $this->conn->prepare($query);
        return($stmt->execute()) ? $stmt->fetchAll(): false;
    }
    public function getAllestudiantes() {
        // Preparar la consulta de inserción
        $query = "SELECT * FROM estudiantes";
        $stmt = $this->conn->prepare($query);
        return($stmt->execute()) ? $stmt->fetchAll(): false;
    }

    public function IngresarUsuario($user, $password) {
        return ($user==="reyes" && $password==="160004728");
    }

}
?>