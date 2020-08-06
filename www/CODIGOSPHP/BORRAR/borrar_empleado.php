
<head>
  <meta charset="UTF-8">
  <title>Eliminar - PSS</title>
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

<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="EMPLEADO";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
}
if (!@mysql_select_db($db, $conexion)){
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
}

if (!$_GET /*($accion)*/){
	?>
    <html>
    <head> <meta charset="UTF-8">
    	<title>PSS</title> <link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css">
    	</head>

    <body>
<header>
		<h1 id="titulo">  ELIMINAR EMPLEADO </h1> </header>
 		<div align="center">

	<?
	//$sql = "SELECT * FROM ".$tabla;
	$sql = "SELECT * FROM EMPLEADO";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<table align="center" border=1 cellpadding="1"><div id="main-container">
   			<table align="center"  > <thead>
	<td>CLAVE EMPLEADO</td>
    <td>NOMBRE</td>
    <td>APELLIDO PATERNO</td>
    <td>APELLIDO MATERNO</td>
    <td>RFC</td>
    <td>FOTO</td>
    <td>PUESTO</td>
    <td>CORREO</td>

</thead>
</tr>

<?
while ($row=mysql_fetch_array($resultado)){
echo "<tr><td>". $row["NUM_EMP"]. "</td>";
echo "<td>". $row["NOM_E"]. "</td>";
echo "<td>". $row["APE_PE"]. "</td>";
echo "<td>". $row["APE_ME"]. "</td>";
echo "<td>". $row["RFC"]. "</td>";
echo "<td>"."<img src=\" ".$row[FOTO]."\" /*width=50,*/ height=150,>"."</td>";
echo "<td>". $row["PUESTO"]. "</td>";
echo "<td>". $row["CORREO"]. "</td>";

	
echo "<td><a href=".$_SERVER['PHP_SELF']."?borrar=".$row['NUM_EMP']."> Borrar</a></td></tr>";
}
?>
	</form>
	</body>
	</html>
<?
}
else {
	
if (empty($_GET['borrar'])==false)
{
$id=$_GET['borrar'];

		?>
    	<html>
    	<head>
    		<link rel="stylesheet" href="dis.css">
    	<link rel="stylesheet" type="text/css" href="jamon.css"></head>
    	<body><header>
		<h1 id="titulo">  ELIMINACION</h1> </header><br><br><br><br><center>
		<?
		
		$sql="DELETE FROM ".$tabla." WHERE NUM_EMP=".$id;
		//$sql="delete from amigo where Clave_A=". $id;

		
		if(@mysql_query($sql)){

			echo "<h1>REGISTRO ELIMINADO</h1>";
		}
		else{
		 	echo mysql_errno();
			echo "<h1>ERROR</h1>";
		}
	}
}
 mysql_close($conexion); ?></center>

	</table>

	</body>
	</html>