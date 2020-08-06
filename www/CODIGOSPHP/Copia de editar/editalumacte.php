	<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="alumacte";

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
	$sql = "SELECT ida11_acte,nom_a,tipo_acte From alumacte inner join alumno on ida11_acte=id_a inner join acte on idt1_acte=id_acte";

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
    <td>BOLETA</td>
    <td>NOMBRE </td>
    <td>ACTIVIDAD</td>
    
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["ida11_acte"]. "</td>";
  echo "<td>". $row["nom_a"]. "</td>";
  echo "<td>". $row["tipo_acte"]. "</td>";

  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['ida11_acte'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM alumacte WHERE ida11_acte=".$id;
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
	<p>BOLETA:
	<input type="text" disabled="disabled" align="LEFT" name="bol" value="<?php echo $registro['ida11_acte'];?>" /><p>
	<p>ACTIVIDAD:
	<input type="text" align="LEFT" name="app" value="<?php echo $registro['idt1_acte'];?>"/><p>
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="editalumacte.php">EDITAR OTRO REGISTRO</a></p></div>

	</body>
	</html>
	<?PHP
}

if($_POST){
	$sql="UPDATE `alumacte` SET
		idt1_acte='$_POST[app]'
		
		
		WHERE ida11_acte=".$id;
		

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