
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
     <li><a href="../CONSULTAS/consulta_aludis.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_aludis.php">Eliminar</a>
        	<li><a href="../BUSCAR/buscar_aludis.php">Buscar</a>
			<li><a href="../INSERTAR/insertar_aludis.php">Insertar</a></li>
			<li><a href="../MODIFICAR/modificar_aludis.php">Modificar</a></li>
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
$tabla="ALUDIS";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexión a la base de datos.</p>');
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
		<h1 id="titulo">  ELIMINAR ALUMNO Y DISCAPACIDAD </h1> </header>
 		<div align="center">

	<?
	$sql = "SELECT MATRICULA4,APE_P,APE_M,NOMBRE,NOM_DIS FROM ALUDIS inner join ALUMNO on ALUDIS.MATRICULA4=ALUMNO.MATRICULA inner join DISCAPACIDAD on ALUDIS.ID_DIS1=DISCAPACIDAD.ID_DIS";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<table align="center" cellpadding="1"><thead>
	    <td>MATRICULA</td>
    <td>PRIMER APELLIDO</td>
    <td>SEGUNDO APELLIDO</td>
    <td>NOMBRE(S)</td>
    <td>DISCAPACIAD</td>
    
 <td>ELIMINAR</td></thead>
</tr>

<?
while ($row=mysql_fetch_array($resultado)){
echo "<tr><td>". $row["MATRICULA4"]. "</td>";
echo "<td>". $row["APE_P"]. "</td>";
echo "<td>". $row["APE_M"]. "</td>";
echo "<td>". $row["NOMBRE"]. "</td>";
echo "<td>". $row["NOM_DIS"]. "</td>";
	
echo "<td><a href=".$_SERVER['PHP_SELF']."?borrar=".$row['MATRICULA4'].">Borrar</a></td></tr>";
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
		
		$sql="DELETE FROM ".$tabla." WHERE MATRICULA4=".$id;
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