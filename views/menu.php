<?php
require_once "/opt/lampp/htdocs/app/controllers/controllerGeneral.php";
    $obj=new controllerGeneral();
    $date=$obj->getAllcursos();
?>

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
      <li><a href="/app/views/menu.php" style="font-family: Roboto, sans-serif;" ><i class="fa-solid fa-sitemap"></i></i>  Inicio</a></li>
      <li><a href="/app/views/inscripcion.php"><i class="fa-solid fa-plus"></i>  Inscripcion</a></li>
      <li><a href="/app/views/listado.php"><i class="fa-sharp fa-solid fa-list"></i>  Listados</a></li>
      <li><a href="#"><i class="fa-solid fa-clipboard"></i>  Planeacion</a></li>
      <li><a href="#"><i class="fa-solid fa-clipboard"></i>  Reporte</a></li>
    </ul>
  </div>

  <main class="content">
    <div class="container">
      <h2 class="page-title">Vista general del curso</h2>
      <p class="page-description">Aquí encontrarás tus cursos, calificaciones y mensajes.</p>
      <div class="row row-cols-1 g-4">
      
      <?php foreach($date as $dates): ?>  
      <div class="col" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); border-radius:6px; font-family: Arial, sans-serif;">
          <div class="card h-100">
          <br>
            <div class="card-body">
              <h5 class="card-title" style="font-size:1.5rem; padding-left:15px">2023 - <?=$dates[1] ?></h5>
              <p class="card-text" style="font-size:1rem; padding-left:15px" >SEMESTRE IV</p>
            </div>
            <div class="card-footer">
              <small class="text-muted" style="font-size:1rem; padding-left:15px" >Última actualización: 3 minutos atrás</small>
            </div>
            <br>
          </div>
        </div>
        <br><br>
        <?php endforeach; ?>

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
