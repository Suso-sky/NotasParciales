<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Menú Lateral</title>
  <style>
  
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;

}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 240px;
  height: 100vh;
  background-color: #333;
  color: #fff;
  overflow-y: auto;
  transition: all 0.3s ease-in-out;
}

.sidebar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid #555;
}

.sidebar h2 {
  margin: 0;
  font-size: 1.5rem;
}


.menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu li {
  margin-bottom: 10px;
}

.menu a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
  display: block;
  transition: background-color 0.3s ease-in-out;
}

.menu a:hover {
  background-color: #555;
}

.content {
  margin-left: 240px;
  padding: 20px;
}
</style>
</head>
<body>
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>Menú</h2>
    </div>
    <ul class="menu">
    <li><a href="/app/views/SelectCurso.php"><i class="fa-solid fa-sitemap"></i></i>  Seleccionar Curso</a></li>
      <li><a href="/app/views/inscripcion.php"><i class="fa-solid fa-plus"></i>  Inscripcion de estudiantes</a></li>
      <li><a href="/app/views/registro.php"><i class="fa-solid fa-plus"></i>  Registro de estudiantes</a></li>
      <li><a href="/app/views/pagina_planeacion.php"><i class="fa-solid fa-clipboard"></i>  Planeacion</a></li>
      <li><a href="/app/views/pagina_calificaciones.php"><i class="fa-solid fa-plus"></i>  Calificaciones</a></li>
      <li><a href="#"><i class="fa-solid fa-clipboard"></i>  Reporte</a></li>
    </ul>
  </div>

  <main class="content">
    <div class="container">
      <h2 class="page-title">Registro de estudiantes</h2>
      <p class="page-description">Aquí encontrarás tus cursos, calificaciones y mensajes.</p>
      <div class="row row-cols-1 g-4">
        <?php
            require_once "../controllers/controllerGeneral.php";
            $obj=new controllerGeneral();
            $actualPage = $_SERVER['PHP_SELF'];
        ?>
        <form action= <?php echo"$actualPage"?> method='POST'><center>   
                
            <input name='cod_est' placeholder='codigo estudiantil'></input>

            <input name='nomb_est' placeholder='nombre del estudiante'></input>
            
            <input type='submit' value='Agregar Estudiante'>
        </form></center>

        <?php
            if(isset($_POST['submit'])){
                
                $cod_est = $_POST['cod_est'];
                $nomb_est = $_POST['nomb_est'];
                
                $obj->AddEstudiante($cod_est,$nomb_est);
                echo "<alert>Agregado Correctamente</alert>";
                
            }
        ?>

      
      
        <footer class="footer">
    <div class="container">
      <p>© 2023 Mi Sitio. Todos los derechos reservados.</p>
    </div>
  </footer>
      </div>
    </div>
  </main>
<br><br><br>


</body>
</html>
