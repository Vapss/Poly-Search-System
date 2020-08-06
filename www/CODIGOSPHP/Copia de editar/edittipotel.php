<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="tipotel";

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
    <head><title>EDITAR</title></head>
    <body>

	<?
	$sql = "SELECT *  from tipotel";

	$resultado = @mysql_query($sql);
	if(!$resultado){
		exit('<p>Error en el Query.'.$resultado.'</p>');
	}
?>

<h1><div align="center">CONSULTA</div></h1>
<table align="center" border=1 cellpadding="1" cellspacing="1">


		<div style="overflow-x:auto;">
    <table align="center" border="1" width="20" bgcolor="#FFFFFF">
    <tr>
    <td>ID</td>
    <td>TIPO</td>
    
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["id_tel"]. "</td>";
  echo "<td>". $row["tipo_tel"]. "</td>";
 
  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['id_tel'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM tipotel WHERE id_tel=".$id;
		$registro = @mysql_query($sql);
	if(!$registro){
		echo "Error ".mysql_errno();
		exit('<p>No se pudo obtener los detalles del registro.</p>');
	}
	$registro = mysql_fetch_array($registro);
	
	?>
<html>
    	<head><title>Actualizar</title></head>
    	<body>
	<h1><div align="center">Editando Datos</div></h1>

	<div align="center">
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" method="get" name="MODIFICAR.PHP">
	<p>ID:
	<input type="text" disabled="disabled" align="LEFT" name="bol" value="<?php echo $registro['id_tel'];?>" /><p>
	<p>TIPO DE TELEFONO:
	<input type="text" align="LEFT" name="car" value="<?php echo $registro['tipo_tel'];?>"/><p>
	
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="edittipotel.php">EDITAR OTRO REGISTRO</a></p></div>

	</body>
	</html>
	<?PHP
}

if($_POST){
	$sql="UPDATE `tipotel` SET
		tipo_tel='$_POST[car]'
		
		WHERE id_tel=".$id;
		

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