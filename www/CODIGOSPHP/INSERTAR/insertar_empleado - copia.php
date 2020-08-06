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

    	<head> <meta charset="UTF-8">
    	<title>Poli Search System 2.0</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	
    	
    	
    	
    	</head>
    	<body>

    	<header>
		<h1 id="titulo">  INSERTAR EMPLEADO </h1> </header>
 		<div align="center">

 			
		</body>

	</html>
	
<html>
<body>
<center>
	<form action="registrar_empleado.php" method="POST" enctype='multipart/form-data'><br>

		NUMERO DE EMPLEADO: <input type="text" name="txt1"> <br/><br>
		NOMBRE: <input type="text" name="txt2"> <br/><br>
		APELLIDO PATERNO: <input type="text" name="txt3"> <br/><br>
		APELLIDO MATERNO: <input type="text" name="txt4"> <br/><br>
		RFC: <input type="text" name="txt5"> <br/><br>
<!--		FOTO: <input type="text" name="txt6"> <br/><br>  -->
FOTO: <input type="file" name="txt6" > <br/><br>
		PUESTO: <input type="text" name="txt7"> <br/><br>
		CORREO: <input type="text" name="txt8"> <br/>
       
			<br>
      <button class="btn btn2" type="submit" value="Registrar" name="btnRegistrar">INGRESAR</button>
	</form>

</body>
</html>