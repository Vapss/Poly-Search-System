<!doctype html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
<title>Busqueda- PSS</title>
<!--favor de no modificar este link-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<!--favor de no modificar este link-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script> 
	</head>
	

<head>
	
  <meta charset="UTF-8">
    <title>Consultar - PSS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        
      </ul>
        </li>
      </ul>
    </nav>
  </header>
</body>

</html>

<?
	/*
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);

if (!$conexion)
   {
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
   }
if (!@mysql_select_db($db, $conexion))
   {
	echo mysql_errno();
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
   }
*/
	?>

    <html>

    	<head> <meta charset="UTF-8">
    	<title>Alumno - Poli Search System 2.0</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	
    	
    	
    	
    	</head>
    	<body>

    	<header>
		<h1 id="titulo">  BUSQUEDA ALUMNO </h1> </header>
 		<div align="center">

 			
		</body>

	</html>
    <!-- Begin page content -->

   <!-- Contenido -->    
			
<head>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Buscar</span>
  </div>
  <input id="FiltrarContenido" type="text" class="form-control" placeholder="Buscar Registro" aria-label="Alumno" aria-describedby="basic-addon1">
</div>
	    <table class="table table-hover">
       <thead>
          <tr align="center">
<th>No. REGISTRO</th>
            <th>BOLETA</th>
            <th>NOMBRE</th>
            <th>APELLIDO PATERNO</th>            
            <th>APELLIDO MATERNO</th>
             <th>FOTO</th>
              <th>GRUPO</th>
              <th>GENERO</th>
               <th>CURP</th>
               <th>CORREO</th>
                <th>PESO</th>
                 <th>ALTURA</th>
                 
          </tr>
        </thead>

        <tbody class="BusquedaRapida">
<?php
include ("conexion1.php");
$con = connect();
$consulta = "SELECT * FROM alumno";
$resultado = mysqli_query($con , $consulta);
$contador=0;

while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;

  echo "<tr><td>$contador</td>";
  echo "<td>". $misdatos["MATRICULA"]. "</td>";
echo "<td>". $misdatos["NOMBRE"]. "</td>";
echo "<td>". $misdatos["APE_P"]. "</td>";
echo "<td>". $misdatos["APE_M"]. "</td>";
//echo "<td>". $misdatos["FOTO"]. "</td>";												  
echo "<td>"."<img src=\" ".$misdatos[FOTO]."\" /*width=20,*/ height=75,>"."</td>";
echo "<td>". $misdatos["GRUPO"]. "</td>";
echo "<td>". $misdatos["GENERO"]. "</td>";
echo "<td>". $misdatos["CURP"]. "</td>";
echo "<td>". $misdatos["CORREO"]. "</td>";
echo "<td>". $misdatos["PESO"]. "</td>";
echo "<td>". $misdatos["ALTURA"]. "</td>";
 
  
 ?>
<?php }?>          

</tbody>
      </table>		
<!-- Fin Contenido --> 
</div>



</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted">PSS</a></p></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--favor de no modificar este link-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--favor de no modificar este link-->
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
  </body>
</html>