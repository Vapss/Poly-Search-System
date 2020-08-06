
<head>
  <meta charset="UTF-8">
  <title>Modificar - PSS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../menuostia.php">Inicio</a></li>
        <!-- CAMBIAR LAS DIRECCIONES-->
        <li><a href="../CONSULTAS/consulta_emptel.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_emptel.php">Eliminar</a>
          <li><a href="../BUSCAR/buscar_emptel.php">Buscar</a>
		  <li><a href="../INSERTAR/insertar_emptel.php">Insertar</a></li>
		  <li><a href="../MODIFICAR/modificar_emptel.php">Modificar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>

<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar

// CAMBIAR EL NOMBRE DE LA TABLA
$tabla="emptel";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
}
if (!@mysql_select_db($db, $conexion)){
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
}

$stel="SELECT * FROM TELEFONO ";
        $qtel=mysql_query($stel);

if (!$_GET /*($accion)*/){

?>
    <html>
    <head> <meta charset="UTF-8">
      <title>PSS</title> <link rel="stylesheet" href="dis.css">
      <link rel="stylesheet" type="text/css" href="jamon.css">
      </head>
      <body>

      <header>
      	<!-- 1: CAMBIARLE NOMBRE A LA TABLA -->
    <h1 id="titulo">  MODIFICAR TELEFONO DEL EMPLEADO </h1> </header>
    <div align="center">
    </body>
	</html>

	<?
	$sql =  "SELECT NUM_EMP2,APE_PE,APE_ME,NOM_E,TIPO_TELEFONO,FON FROM EMPTEL INNER JOIN EMPLEADO ON EMPTEL.NUM_EMP2=EMPLEADO.NUM_EMP INNER JOIN TELEFONO ON EMPTEL.ID_TELEFONO1=TELEFONO.ID_TELEFONO
";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<br><br>

<HTML>
    <BODY>
    <div id="main-container">
        <table align="center"  > <thead>
<tr>
    <td>CLAVE EMPLEADO</td>
    <td>PRIMER APELLIDO</td>
    <td>SEGUNDO APELLIDO</td>
    <td>NOMBRE</td>
    <td>TIPO</td>
    <td>NUMERO TELFONICO</td>
    <td>EDITAR</td>
    </tr></thead>

<!-- 3: CAMBIAR LOS VALORES EXACTOS COMO SQL DE LA TABLA -->
<?
while ($row=mysql_fetch_array($resultado)){

	echo "<tr><td>". $row["NUM_EMP2"]. "</td>";
echo "<td>". $row["APE_PE"]. "</td>";
echo "<td>". $row["APE_ME"]. "</td>";
echo "<td>". $row["NOM_E"]. "</td>";
echo "<td>". $row["TIPO_TELEFONO"]. "</td>";
echo "<td>". $row["FON"]. "</td>";
	
									// 4. CAMBIAR LA CLAVE PRIMARIA
	echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['NUM_EMP2'].">Editar</a></td></tr>";
}
?>
	</table>
	</div>
	</body>
	</html>
<?
}
if (empty($_GET['cambiar'])==false)
{
$id=$_GET['cambiar'];
								// 5. CAMBIAR CLAVE PRIMARIA
		$sql = "SELECT * FROM ".$tabla." WHERE NUM_EMP2=".$id;
		$registro = @mysql_query($sql);
	if(!$registro){
		echo "Error ".mysql_errno();
		exit('<p>No se pudo obtener los detalles del registro.</p>');
	}
	$registro = mysql_fetch_array($registro);
	
	?>

	<html>
    <head> <meta charset="UTF-8">
      <title>PSS</title> <link rel="stylesheet" href="dis.css">
      <link rel="stylesheet" type="text/css" href="jamon.css">
      </head>
      <body>

      <header>
      	<!-- 1: CAMBIARLE NOMBRE A LA TABLA -->
    <h1 id="titulo">  CAMBIO DE DATOS </h1> </header>
    <div align="center">
    </body>
	</html>

	<html>
    	

	<div align="center">					<!-- 6: CAMBIAR EL NOMBRE AL DEL PHP ACTUAL -->
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" name="modificar_empteltel.php">
<!-- 7. CAMBIAR LOS NOMBRES Y LOS VALORES COMO EN SQL -->
	<p>			
	<input type="hidden" align="LEFT" name="NUM_EMP2" value="<?php echo $registro['NUM_EMP2'];?>" /><p>
		<br><h2>Modifique los datos con cuidado y al terminar presione GUARDAR<br> </h2>
<br><br>
	<p>TELEFONO:
	<select name="ID_TELEFONO1" value="<?php echo $registro['ID_TELEFONO1'];?>"/>
      <? while($atel=mysql_fetch_array($qtel))  { ?>
      <option value="<? echo $atel['ID_TELEFONO']?> ">
      <? echo $atel['TIPO_TELEFONO']?></option><? } ?>  </select><br><br><p>

	<p>NUMERO:
	<input type="text" align="LEFT" name="FON" value="<?php echo $registro['FON'];?>"/><p><br><br>

	
	<input type="submit" align="center" value=" 	 	GUARDAR  	 	" name="actualizar">
	</form></div>
	<!-- 8: CAMBIAR AL NOMBRE DEL PHP ACUTAL--><br><br>
	<div align="center"><p><a href="modificar_emptel.php">Volver</a></p></div>
	 

	</body>
	</html>
<?PHP
}

if($_POST){

	

 	//CAMBIAR LOS VALORES COMO EN SQL
 	// SI NECESITAS MAS VARIABLES SUBS, SOLO CONTINUA EL ABECEDARIO
$subs_A = utf8_decode($_POST['ID_TELEFONO1']);
$subs_B = utf8_decode($_POST['NUM_EMP2']);
$subs_C = utf8_decode($_POST['FON']);


		$sql="UPDATE ".$tabla." SET
		ID_TELEFONO1='$subs_A',
		FON='$subs_C'
		WHERE NUM_EMP2=".$id;
		

		if(@mysql_query($sql)){
			echo '<script>alert("Registro Actualizado.");</script>';
		}
		else{
			echo "<p>Error al actualizar el registro.</p>";
			echo mysql_errno();
			if (mysql_errno()==1452){
				echo "existe una restricci�n";
			}
		}
	
	echo '</body></html>';

}
 mysql_close($conexion); ?>