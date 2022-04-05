<?php

include ("conectar.php");

if ( isset($_POST['enviar'])) {

    $nocontrol = $_POST ['nocontrol'];
    $nombre =  $_POST ['nombre']; 
    $carrera = $_POST ['carrera'];
    $semestre = $_POST ['semestre'];
    $curso = $_POST ['curso'];
    $correo =  $_POST ['correo']; 
    $password =  $_POST['password'];
    
    $query = "INSERT INTO registro (nocontrol, nombre, carrera, semestre, curso, correo, password) VALUES ('$nocontrol', '$nombre', '$carrera', '$semestre', '$curso', '$correo', '$password')";
    $result = mysqli_query($conn, $query); 
    
    if (!$result) {
       die("Query Failed"); 
    }
    echo "guardado"; 
    //echo "Numero de control: $nocontrol<br>";
   // echo "Nombre: $nombre<br>"; 
    //echo "Carrera cursando: $carrera<br>"; 
    //echo "semestre : $semestre<br>"; 
    //echo "Curso elegido: $curso<br>"; 
    //echo "Correo institucional: $correo <br>";
}




?>
