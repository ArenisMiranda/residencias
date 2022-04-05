<?php include("includes/header.php")?>

    <img src="imagenes/logoita.png" alt="logoita" width=" " height="83">
	<img src="imagenes/pleca-gob2.png" alt="logoeducación" width=" " height="83">
	<img src="imagenes/tecnm.png" alt="tecnm" width=" " height="83">
<body>
<nav class="navbar navbar-expand-lg navbar-dark nav-color-tecnm">

<div class="container-fluid">

    <a class="navbar-brand" href="#">TecNM</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">

                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>

<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

    <li>

        <hr class="dropdown-divider" />

    </li>

    <li><a class="dropdown-item" href="registroEstudiante">Registrarse</a></li>

</ul>

</li>

<li class="nav-item">

<a class="nav-link active" href="indexestudiante.php">CURSOS</a>


</li>

</ul>

</div>

</div>

</nav>
   
<form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="inputEmail4" name ="usuario">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary"  name="sesion" >Sign in</button>
  </div>
</form>


<?php 

include ("conectar.php");

if ( isset($_POST["sesion"]) ) {

    $usuario = $_POST ["usuario"];
    $password = $_POST["password"]; 
    $usuario2 = "";
    $password2 = "";
 

    if(!empty($usuario) && !empty($password) && isset($_POST["usuario"]) && isset($_POST["password"])){

    $query = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' and password = '$password' and estatus = 0";
  //  $result = mysqli_query($conn, $query); 


    if ($result = mysqli_query($conn, $query)) {

        /* obtener el array de objetos */
        while ($fila = mysqli_fetch_row($result)) {
            $usuario2 = $fila[0];
            $password2 = $fila[1];
        }
    
    // echo "$usuario<br>";
    // echo "$password<br>"; 
    }

    if($usuario == $usuario2 && $password == $password2){
        header("Location: menu.php");
    }else {
        echo "error";
    }
    
    }
    }
?>




<?php include("includes/footer.php")?>