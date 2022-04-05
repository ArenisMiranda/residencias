<?php include("conectar.php")?>
<?php include("includes/header.php")?>
    
    <img src="imagenes/logoita.png" alt="logoita" width=" " height="83">
	<img src="imagenes/pleca-gob2.png" alt="logoeducación" width=" " height="83">
	<img src="imagenes/tecnm.png" alt="tecnm" width=" " height="83">

<nav class="navbar navbar-expand-lg navbar-dark nav-color-tecnm">

<div class="container-fluir">

    <a class="navbar-brand" href="index.php">TECNM</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

           <li class="nav-item dropdown">

                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
             </li> 
        <li class="nav-item">
        <a class="nav-link active" href="index.php">Menu</a> 
        </li>
    </div>

</div>
</nav>
<br>


<div>
    <table class="table" id="tablacursos" > 
        <thead class="text-center" >
            <tr>
                <th>CURSO</th>
                <th>ENCARGADO</th>
                <th>FECHA Y HORA DE INICIO</th>
                <th>DURACIÓN</th>
                <th>CUPO DE PERSONAS</th>

            </tr>
        </thead>

    </table>
</div>
   
                <form action="recibiralumno.php" method="POST">
        <fieldset>
        
        REGISTRO CURSO/TALLER <br>


            <div class="form-group">				
				Ingresa tu número de control <input type="number" class="form-control" name="nocontrol" placeholder="Número de control" required>
			</div>
        
            <div class="form-group">				
				Ingresa tu nombre completo<input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
			</div>

            <div class="form-group">				
				Carrera cursando: <select name="carrera" id="carrera" required>
           <option value="arq"> Arquitectura</option> 
           <option value="isc"> Ing. en Sistemas Computacionales </option>
           <option value="iem"> Ing. Electromecánica </option>
           <option value="ibq"> Ing. Bioquímica </option>
           <option value="ige"> Ing. en Gestión Empresarial </option>
           <option value="cp"> Contador Público </option>
           <option value="la"> Lic. en Administración </option>
           <option value="pos"> Lic. en Administración </option>
             </select> <br> 
                </div>
               
                <div class="form-group">				
				Elige tu semestre: <select name="semestre" id="semestre" required>
           <option value="1"> 1 </option> 
           <option value="2"> 2 </option>
           <option value="3"> 3 </option>
           <option value="4"> 4 </option>
           <option value="5"> 5 </option>
           <option value="6"> 6 </option>
           <option value="7"> 7 </option>
           <option value="8"> 8 </option>
           <option value="9"> 9 </option>
           <option value="10"> 10 </option>
           <option value="11"> 11 </option>
           <option value="12"> 12 </option>
           <option value="13"> 13 </option>
           <option value="14"> 14 </option>

             </select> <br>
                </div>

            <div class="form-group">	
            <label for="programa" >¿Que curso deseas tomar? </label> 			
				<input type="text" class="form-control" name="curso" placeholder="Cuso seleccionado" required>
			</div>
               
            <div class="form-group">				
				Ingresa tu correo institucional<input type="email" class="form-control" name="correo" placeholder="Correo Institucional" required>
			</div>
       
        <div class="form-group">				
				Ingresa una contraseña: <input type="password" class="form-control" name="password" placeholder="Ingresa una contraseña" required>
			</div> <br>
        
        <input type="submit" name="enviar" value="enviar">
        </fieldset>


    </form>
    <?php include("includes/footer.php")?>

