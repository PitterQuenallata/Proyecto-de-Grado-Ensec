<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | AdminKit Demo</title>

	<link href="vistas/dist/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>


<?php 
// include "modulos/login.php"
// include "modulos/cabezote.php"
  if(isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion']=="ok"){
   

    echo '<body class="hold-transition sidebar-mini">';
   
    echo '<div class="wrapper">';
   
    include "modulos/cabezote.php";
    // include "modulos/menu.php";
     

    // if(isset($_GET["ruta"])){

    //   if($_GET["ruta"] == "inicio" ||
    //      $_GET["ruta"] == "usuarios" ||
    //      $_GET["ruta"] == "categorias" ||
    //      $_GET["ruta"] == "productos" ||
    //      $_GET["ruta"] == "clientes" ||
    //      $_GET["ruta"] == "ventas" ||
    //      $_GET["ruta"] == "crear-venta" ||
    //      $_GET["ruta"] == "reportes" ||
    //      $_GET["ruta"] == "salir"){

    //     include "modulos/".$_GET["ruta"].".php";

    //   }else{

    //     //include "modulos/404.php";

    //   }

    // }else{

    //   //include "../vistas/modulos/inicio.php";

    // }


  //include "modulos/footer.php";

    echo '</div>';
  
    echo '</body>';
    

  }else{

    echo '<body class="hold-transition login-page">';

    include "modulos/login.php";

    echo '</body>';  
} 

?>  
<!--scripts DE MI PROYECTO --> 
<script src="js/app.js"></script>
<script src="dist/js/plantilla.js"></script>




</html>
