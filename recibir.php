<?php
include ("conectar.php");

if ( isset($_POST["enviar"]) ) {

$clave = $_POST ["clave"];
$nombre = $_POST["nombre"]; 
$imparte = $_POST["imparte"]; 
$fechainicio = $_POST["fechainicio"];
$horainicio = $_POST ["horainicio"]; 
$fechater = $_POST["fechater"];
$horater = $_POST ["horater"];
$duracion = $_POST["duracion"];
$tipocurso = $_POST ["tipocurso"];
$capacidad = $_POST ["capacidad"];
$estatus =  $_POST["estatus"];

   if($estatus == "true"){

      $query = "INSERT INTO cursos (clave, nombre, imparte, fechainicio, horainicio, fechater, horater, duracion, tipocurso, capacidad, estatus)  VALUES ('$clave', '$nombre', '$imparte', '$fechainicio', '$horainicio', '$fechater', '$horater', '$duracion, '$tipocurso', '$capacidad', true)";
  
      $result = mysqli_query($conn, $query);
  
  }else {
  
     $query = "INSERT INTO cursos (clave, nombre, imparte, fechainicio, horainicio, fechater, horater, duracion, tipocurso, capacidad, estatus)  VALUES ('$clave', '$nombre', '$imparte', '$fechainicio', '$horainicio', '$fechater', '$horater', '$duracion', '$tipocurso', '$capacidad', false)";
  
      $result = mysqli_query($conn, $query);
  
  }

if (!$result) {
   die("Query Failed"); 
}
echo "guardado"; 

/*echo "Clave del curso: $clave<br>";
echo "Nombre: $nombre<br>"; 
echo "¿Quién lo imparte?: $imparte<br>"; 
echo "Fecha de inicio: $fechainicio <br>";
echo "Hora de inicio: $horainicio <br>";
echo "Fecha de terminación: $fechater <br>";
echo "Hora de terminación: $horater <br>";
echo "El curso será impartido para: $tipocurso <br>";
echo "Capacidad de alumnos: $capacidad <br>";*/
//echo $estatus;

}
?>
