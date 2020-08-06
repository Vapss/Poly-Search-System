<?
 
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);

if (!$conexion)
   {
  exit('<p>No pudo realizarce la conexión a la base de datos.</p>');
   }
if (!@mysql_select_db($db, $conexion))
   {
  echo mysql_errno();
  exit ('<p>Problema al seleccionar la base de datos $db.</p>');
   }

  
        //CONSULTA SANGRE
        $ssangre="SELECT * FROM SANGRE ";
        $qsangre=mysql_query($ssangre);

         //CONSULTA TURNO
        $sturno="SELECT * FROM TURNO ";
        $qturno=mysql_query($sturno);

         //CONSULTA CARRERA
        $scarrera="SELECT * FROM CARRERA ";
        $qcarrera=mysql_query($scarrera);

         //CONSULTA STATUS
        $sestatus="SELECT * FROM ESTATUS ";
        $qestatus=mysql_query($sestatus);

?>

<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="UTF-8">
  <title>Ingresar - PSS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
  <link rel="stylesheet" href="butt.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
         <li><a href="../menuostia.php">Inicio</a></li>
        <li><a href="../CONSULTAS/consulta_alumno.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_alumno.php">Eliminar</a>
        	<li><a href="../BUSCAR/buscar_alumno.php">Buscar</a>
             <li><a href="../INSERTAR/insertar_alumno.php">Insertar</a></li>
			 <li><a href="../MODIFICAR/modificar_alumno.php">Modificar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>
 <html>

    	<head> <meta charset="UTF-8">
    	<title>Poli Search System 2.0</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	
    	
    	
    	
    	</head>
    	<body>

    	<header>
		<h1 id="titulo">  INSERTAR ALUMNO </h1> </header>
 		<div align="center">

 			
		</body>

	</html>
	
<html>
<body>
<center>
	<form action="registrar_alumno.php" method="POST"  enctype='multipart/form-data'><br>
		MATRICULA: <input type="text" name="txt1"> <br/><br>
		NOMBRE: <input type="text" name="txt2"> <br/><br>
		APELLIDO PATERNO: <input type="text" name="txt3"> <br/><br>
		APELLIDO MATERNO: <input type="text" name="txt4"> <br/><br>
    FOTO: <input type="file" name="txt5" > <br/><br>
		GRUPO: <input type="text" name="txt6"> <br/><br>

		

     GENERO:
      <select name="txt7">
      <option>HOMBRE</option>
      <option>MUJER</option>
      </select><br><br>


		CURP: <input type="text" name="txt8"> <br/><br>
    CORREO: <input type="text" name="txt9"> <br/><br>
		PESO: <input type="text" name="txt10"> <br/><br>
		ALTURA: <input type="text" name="txt11"> <br/><br>

     TIPO DE SANGRE:
      <select name="txt12">
      <? while($asangre=mysql_fetch_array($qsangre))  { ?>
      <option value="<? echo $asangre['ID_SAN']?> ">
      <? echo $asangre['TIP_SAN']?></option><? } ?>  </select><br><br>
       

      TURNO:
        <select name="txt13">
        <? while($aturno=mysql_fetch_array($qturno))  { ?>
        <option value="<? echo $aturno['ID_TURNO']?> ">
        <? echo $aturno['NOM_TURNO']?></option><? } ?>  </select><br><br>


  
      CARRERA:
        <select name="txt14">
        <? while($acarrera=mysql_fetch_array($qcarrera))  { ?>
       <option value="<? echo $acarrera['ID_CARRERA']?> ">
       <? echo $acarrera['NOM_CARRERA']?></option><? } ?>  </select><br><br>



      ESTATUS:
        <select name="txt15">
        <? while($aestatus=mysql_fetch_array($qestatus))  { ?>
       <option value="<? echo $aestatus['ID_ESTATUS']?> ">
       <? echo $aestatus['NOM_ESTATUS']?></option><? } ?>  </select><br><br>



<div class="container">
			
<button class="btn btn2" type="submit" value="Registrar" name="btnRegistrar">INGRESAR</button>
    </div>

	</form>

</body>
</html>