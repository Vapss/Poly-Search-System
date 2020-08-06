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

  
        //CONSULTA TELEFONO
        $stel="SELECT * FROM TELEFONO ";
        $qtel=mysql_query($stel);

         //CONSULTA ALUMNO
        $salumno="SELECT * FROM ALUMNO ";
        $qalumno=mysql_query($salumno);


?>



<head>
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
        <li><a href="../CONSULTAS/consulta_alutel.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_alutel.php">Eliminar</a>
        	<li><a href="../BUSCAR/buscar_alutel.php">Buscar</a>
             <li><a href="../INSERTAR/insertar_alutel.php">Insertar</a></li>
			 <li><a href="../MODIFICAR/modificar_alutel.php">Modificar</a></li>
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
		<h1 id="titulo">  INSERTAR TELEFONO DEL ALUMNO </h1> </header>
 		<div align="center">

 			
		</body>

	</html>
	
<html>
<body>
<center>
	<form action="registrar_alutel.php" method="POST"><br>
		SELECCIONE:<br><br>
    TIPO DE TELEFONO:
      <select name="txtClave">
      <? while($atel=mysql_fetch_array($qtel))  { ?>
      <option value="<? echo $atel['ID_TELEFONO']?> ">
      <? echo $atel['TIPO_TELEFONO']?></option><? } ?>  </select><br><br>

      ALUMNO:
      <select name="txtNombre">
      <? while($aalumno=mysql_fetch_array($qalumno))  { ?>
      <option value="<? echo $aalumno['MATRICULA']?> ">
      <? echo $aalumno['MATRICULA'],' . . . . ',$aalumno['APE_P'],' ',$aalumno['APE_M'],' ',$aalumno['NOMBRE']?>
        
      </option><? } ?>  </select><a href="../BUSCAR/buscar_alumno.php"  target="_blank" > <br>Buscar alumno</a><br><br>




        NUMERO: <input type="text" name="txtCelular"> <br/>

			<br>
      <button class="btn btn2" type="submit" value="Registrar" name="btnRegistrar">INGRESAR</button>
	</form>

</body>
</html>