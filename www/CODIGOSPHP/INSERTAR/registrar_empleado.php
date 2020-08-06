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
        <li><a href="../CONSULTAS/consulta_empleado.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_empleado.php">Eliminar</a>
        	<li><a href="../BUSCAR/buscar_empleado.php">Buscar</a>
             <li><a href="../INSERTAR/insertar_empleado.php">Insertar</a></li>
			 <li><a href="../MODIFICAR/modificar_empleado.php">Modificar</a></li>
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

			if($_FILES["txt6"]["size"]>9000000){
				echo "solo se permiten archivos menores de 9MB";
				exit;
			}
			
				$carpeta="../IMG/EMP/";
				opendir($carpeta);
				$destino = $carpeta.$_FILES['txt6']['name'];
				copy($_FILES['txt6']['tmp_name'],$destino);


			$nume = $_POST['txt1'];
			$nombre = $_POST['txt2'];
			$ap = $_POST['txt3'];
			$am = $_POST['txt4'];
			$rfc = $_POST['txt5'];
			
			$fotoname = $_FILES['txt6']['name'];
			$foto=$carpeta.$fotoname;
			
			$puesto = $_POST['txt7'];
			$correo = $_POST['txt8'];

			$insertar = "INSERT into empleado values ('$nume', '$nombre', '$ap', '$am', '$rfc', '$foto', '$puesto', '$correo')";

			$resultado = mysqli_query($conexion, $insertar)
				or die ("ERROR AL INSERTAR DATOS");

			mysqli_close($conexion);
			echo "Datos insertados correctamente";
	?></h1></center>
</body>
</html> 