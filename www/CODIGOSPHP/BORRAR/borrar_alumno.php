

<head>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <meta charset="UTF-8">
  <title>Eliminar - PSS</title>
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

<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="ALUMNO";

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
		<h1 id="titulo">  ELIMINAR ALUMNO </h1> </header>
 		<div align="center">

	<?
	$sql = "SELECT MATRICULA,NOMBRE,APE_P,APE_M,FOTO,GRUPO,GENERO,CURP,CORREO,PESO, ALTURA,TIP_SAN, NOM_TURNO,NOM_CARRERA,NOM_ESTATUS FROM ALUMNO inner join SANGRE on ALUMNO.ID_SAN1=SANGRE.ID_SAN inner join  TURNO on ALUMNO.ID_TURNO1=TURNO.ID_TURNO inner join CARRERA on ALUMNO.ID_CARRERA1=CARRERA.ID_CARRERA inner join ESTATUS ON ALUMNO.ID_ESTATUS1=ESTATUS.ID_ESTATUS";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<table align="center" border=1 cellpadding="1"><div id="main-container">
   			<table align="center"  > <thead>
	<td>MATRICULA</td>
    <td>NOMBRE</td>
    <td>APELLIDO PATERNO</td>
    <td>APELLIDO MATERNO</td>
    <td>FOTO</td>
    <td>GRUPO</td>
    <td>GENERO</td>
    <td>CURP</td>
    <td>CORREO</td>
    <td>PESO</td>
    <td>ALTURA</td>
    <td>TIPO DE SANGRE</td> 
    <td>TURNO</td>
    <td>CARRERA</td>
    <td>ESTATUS</td>
    <td>ELIMINAR</td>
</thead>
</tr>

<?
while ($row=mysql_fetch_array($resultado)){
echo "<tr><td>". $row["MATRICULA"]. "</td>";
echo "<td>". $row["NOMBRE"]. "</td>";
echo "<td>". $row["APE_P"]. "</td>";
echo "<td>". $row["APE_M"]. "</td>";
echo "<td>"."<img src=\" ".$row[FOTO]."\" /*width=50,*/ height=150,>"."</td>";
echo "<td>". $row["GRUPO"]. "</td>";
echo "<td>". $row["GENERO"]. "</td>";
echo "<td>". $row["CURP"]. "</td>";
echo "<td>". $row["CORREO"]. "</td>";
echo "<td>". $row["PESO"]. "</td>";
echo "<td>". $row["ALTURA"]. "</td>";
/*
echo "<td>". $row["ID_TURNO1"]. "</td>";
echo "<td>". $row["ID_CARRERA1"]. "</td>";
echo "<td>". $row["ID_TELEFONO1"]. "</td>";
echo "<td>". $row["ID_ACTEXT1"]. "</td>";
echo "<td>". $row["ID_ESTATUS1"]. "</td>";  */
echo "<td>". $row["TIP_SAN"]. "</td>";
echo "<td>". $row["NOM_TURNO"]. "</td>";
echo "<td>". $row["NOM_CARRERA"]. "</td>";
echo "<td>". $row["NOM_ESTATUS"]. "</td>";
	
echo "<td><a href=".$_SERVER['PHP_SELF']."?borrar=".$row['MATRICULA']."> Borrar</a></td></tr>";
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
		
		$sql="DELETE FROM ".$tabla." WHERE MATRICULA=".$id;
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
 mysql_close($conexion); ?>
</center>
	</table>

	</body>
	</html>