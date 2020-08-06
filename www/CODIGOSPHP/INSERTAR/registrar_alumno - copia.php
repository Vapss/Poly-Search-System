<head>
  <meta charset="UTF-8">
  <title>Ingresar - PSS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
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
<head>
    		<link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css"></head>

    	<body>
    		<header>
		<h1 id="titulo">  INSERTAR</h1> </header><br><br><br><br><center><h1>

	<?php
		$server = "localhost";
		$usuario = "root";
		$contraseña = "sasasasa";
		$bd = "pss";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("ERROR EN LA CONEXION");

			$matricula = $_POST['txt1'];
			$nombre = $_POST['txt2'];
			$ap = $_POST['txt3'];
			$am = $_POST['txt4'];
			$foto = $_POST['txt5'];
			$grupo = $_POST['txt6'];
			$genero = $_POST['txt7'];
			$curp = $_POST['txt8'];
			$correo = $_POST['txt9'];
			$peso = $_POST['txt10'];
			$altura = $_POST['txt11'];
			$san = $_POST['txt12'];
			$tur = $_POST['txt13'];
			$carrera = $_POST['txt14'];
			$estatus = $_POST['txt15'];

			$insertar = "INSERT into alumno values ('$matricula', '$nombre', '$ap', '$am', '$foto', '$grupo', '$genero', '$curp', '$correo', '$peso', '$altura', '$san', '$tur', '$carrera', '$estatus')";

			$resultado = mysqli_query($conexion, $insertar)
				or die ("ERROR AL INSERTAR DATOS");

			mysqli_close($conexion);
			echo "Datos insertados correctamente";
	?></center></h1>
</body>
</html> 