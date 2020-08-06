	<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="sasasasa"; // password de acceso para el usuario de la
                      // linea anterior
$db="pss";        // Seleccionamos la base con la cual trabajar
$tabla="datosmedicos";

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
	$sql = "SELECT ida1_d, nom_a, peso_d, tipo_s, altura_d, tipo_e, tipo_di
FROM
  datosmedicos
  INNER JOIN alumno ON ida1_d=id_a
  INNER JOIN sangre ON ts_d=id_s
  INNER JOIN enfermedad ON ide_d=id_e
  INNER JOIN Discapacidad ON idd_d=id_di";

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
    <td>PESO</td>
    <td>TIPO DE SANGRE</td>
    <td>ALTURA</td>
    <td>ENFERMEDAD</td>
    <td>DISCAPACIDAD</td>
    
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["ida1_d"]. "</td>";
  echo "<td>". $row["nom_a"]. "</td>";
  echo "<td>". $row["peso_d"]. "</td>";
  echo "<td>". $row["tipo_s"]. "</td>";

  echo "<td>". $row["altura_d"]. "</td>";
  echo "<td>". $row["tipo_e"]."</td>";
  echo "<td>". $row["tipo_di"]."</td>";
 
  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['ida1_d'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM datosmedicos WHERE ida1_d=".$id;
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
	<input type="text" disabled="disabled" align="LEFT" name="bol" value="<?php echo $registro['ida1_d'];?>" /><p>
	<p>PESO:
	<input type="text" align="LEFT" name="nom" value="<?php echo $registro['peso_d'];?>"/><p>
	<p>TIPO DE SANGRE:
	<input type="text" align="LEFT" name="app" value="<?php echo $registro['ts_d'];?>"/><p>
	<p>ALTURA:
	<input type="text" align="LEFT" name="apm" value="<?php echo $registro['altura_d'];?>"/><p>
	<p>ENFERMEDAD:
	<input type="text" align="LEFT" name="foto" value="<?php echo $registro['ide_d'];?>"/><p>
	<p>DISCAPACIDAD:
		
<input type="text" align="LEFT" name="gen" value="<?php echo $registro['idd_d'];?>"/><p>
	<p>
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="editdts.php">EDITAR OTRO REGISTRO</a></p></div>

	</body>
	</html>
	<?PHP
}

if($_POST){
	$sql="UPDATE `datosmedicos` SET
		peso_d='$_POST[nom]',
		ts_d='$_POST[app]',
		altura_d='$_POST[apm]',
		ide_d='$_POST[foto]',
		idd_d='$_POST[gen]'
		
		WHERE ida1_d=".$id;
		

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