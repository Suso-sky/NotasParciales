<?php
/* Esto es para que muestre los Errores en pantalla, cuando tenga */
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class modelGeneral {
    private $conn;

    public function __construct() {
        require_once '../config/Conexion.php';
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


    public function getEstudiantes($cod_cur,$year,$periodo){

        $query = "SELECT i.cod_est, e.nomb_est FROM inscripciones i join estudiantes e on i.cod_est = e.cod_est where cod_cur = $cod_cur and year = $year and periodo = $periodo";
        $stmt = $this->conn->prepare($query);
        return($stmt->execute()) ? $stmt->fetchAll(): false;
    }

    public function InscribirEstudiante($cod_est,$cod_cur,$periodo,$year){
        
        try {
            $query = "INSERT INTO inscripciones(periodo,year,cod_cur,cod_est) values ($periodo,$year,$cod_cur,$cod_est)";
            $stmt = $this->conn->prepare($query);
            return($stmt->execute()) ? $stmt->fetchAll(): false;
        }
        catch (PDOException $exception){
            return 'Error: ' . $exception->getMessage();
        }

    }

    public function get_nomb_cur($cod_cur){
        
        $query = $this->conn->query("SELECT nomb_cur from cursos  where cod_cur = $cod_cur;");
        
        foreach($query as $row){
            $nomb_cur = $row[0];
        }

        return $nomb_cur;
    }

}
?>