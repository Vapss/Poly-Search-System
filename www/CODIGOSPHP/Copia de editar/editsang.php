<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="sangre";

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
    <head><title>datos en la base</title></head>
    <body>

	<?
	$sql = "SELECT *  from sangre";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<h1><div align="center">Contenido de la base de datos <?php echo $db.", tabla ".$tabla;?></div></h1>
<table align="center" border=1 cellpadding="1" cellspacing="1">


		<div style="overflow-x:auto;">
    <table align="center" border="1" width="20" bgcolor="#FFFFFF">
    <tr>
    <td>ID</td>
    <td>CARRERA</td>
    
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["id_s"]. "</td>";
  echo "<td>". $row["tipo_s"]. "</td>";
 
  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['id_s'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM sangre WHERE id_s=".$id;
		$registro = @mysql_query($sql);
	if(!$registro){
		echo "Error ".mysql_errno();
		exit('<p>No se pudo obtener los detalles del registro.</p>');
	}
	$registro = mysql_fetch_array($registro);
	
	?>
<html>
    	<head><title>Actualizar datos</title></head>
    	<body>
	<h1><div align="center">Editando Datos</div></h1>

	<div align="center">
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" method="get" name="MODIFICAR.PHP">
	<p>ID:
	<input type="text" disabled="disabled" align="LEFT" name="bol" value="<?php echo $registro['id_s'];?>" /><p>
	<p>TIPO DE SANGRE:
	<input type="text" align="LEFT" name="car" value="<?php echo $registro['tipo_s'];?>"/><p>
	
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="editsang.php">EDITAR OTRO REGISTRO</a></p></div>

	</body>
	</html>
	<?PHP
}

if($_POST){
	$sql="UPDATE `sangre` SET
		tipo_s='$_POST[car]'
		
		WHERE id_s=".$id;
		

		if(@mysql_query($sql)){
			echo '<script>alert("Registro Actualizado.");</script>';
		}
		else{
			echo "<p>Error al actualizar el registro.</p>";
			echo mysql_errno();
			if (mysql_errno()==1452){
				echo "existe una restricción";
			}
		}
	
	echo '</body></html>';

}
 mysql_close($conexion); ?>