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

            </li>

<li class="nav-item">
<a class="nav-link active" href="index.php">Cerrar Sesión</a>
</li>

</div>

</div>

</nav>
   
                <form action="recibir.php" method="post">
        <fieldset>
        Clave del curso: <input type="text" name="clave" > <br>
       
        Nombre de evento: <input type="text" name="nombre" placeholder= "Curso ..."> <br>
       
        ¿Quién lo imparte: <input type="text" name="imparte" placeholder="Ing. Rodolfo Mena"> <br>
       
        Fecha y hora de inicio: <input type="date"  name="fechainicio" >
        <input type="time" name= "horainicio"> <br>
       
        Fecha y hora de terminación: <input type="date" name="fechater"> 
        <input type="time" name= "horater"> <br>
       
        Duración del curso: <input type="number" name="duracion" > <br>

        ¿Pará quién se imparte el curso?: <select name="tipocurso" id="tipocurso">
           <option value="Alumnos"> Alumnos</option> 
           <option value="Docentes"> Docentes </option>
           <option value="Externos"> Personas externas</option>
        </select> <br>
       
        Capacidad de alumnos: <input type="number" name = "capacidad"  min="10" max="35" maxlength="2"> <br>
        
        El curso ya esta activado: <select name="estatus" id="estatus">
           <option value="false"> Activo</option> 
           <option value="true"> Desactivado </option>
        </select> <br>

        <input type="submit" name="enviar" value="enviar">
        </fieldset>


    </form>
   
    <?php include("includes/footer.php")?>

