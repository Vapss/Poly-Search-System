

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
$tabla="alumno";

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
	$sql = "SELECT `id_a`,`nom_a`,`apellp_a`,`apellm_a`,`foto_a`,`gen_g`,`curp_a`,`correo_a`,`nom_es`,`nom_c`,`tipo_t`  from alumno

inner JOIN `estatus` on `ides_a`=`id_es`
inner join `genero` on `gen_a`=`id_g` 
inner join `carrera` on `idc_a`=`id_c`
inner join `turno` on `id_t1`=`id_t`
";

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
    <td>NUMERO DE BOLETA</td>
    <td>NOMBRE </td>
    <td>APELLIDO PATERNO</td>
    <td>APELLIDO MATERNO</td>
    <td>FOTO</td>
    <td>GENERO</td>
    <td>CURP</td>
    <td>CORREO ELECTRONICO</td>
    <td>ESTATUS</td>
    <td>CARRERA</td>
    <td>TURNO</td>
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["id_a"]. "</td>";
  echo "<td>". $row["nom_a"]. "</td>";
  echo "<td>". $row["apellp_a"]. "</td>";
  echo "<td>". $row["apellm_a"]. "</td>";
echo "<td>"."<img src=\" ".$row[foto_a]."\" width=100, height=100,>"."</td>";
  echo "<td>". $row["gen_g"]. "</td>";
  echo "<td>". $row["curp_a"]."</td>";
  echo "<td>". $row["correo_a"]."</td>";
  echo "<td>". $row["nom_es"]."</td>";
  echo "<td>". $row["nom_c"]. "</td>";
  echo "<td>". $row["tipo_t"]. "</td>";
  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['id_a'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM alumno WHERE id_a=".$id;
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
	<input type="text" disabled="disabled" align="LEFT" name="bol" value="<?php echo $registro['id_a'];?>" /><p>
	<p>NOMBRE:
	<input type="text" align="LEFT" name="nom" value="<?php echo $registro['nom_a'];?>"/><p>
	<p>APELLIDO PATERNO:
	<input type="text" align="LEFT" name="app" value="<?php echo $registro['apellp_a'];?>"/><p>
	<p>APELLIDO MATERNO:
	<input type="text" align="LEFT" name="apm" value="<?php echo $registro['apellm_a'];?>"/><p>
	<p>FOTO:
	<input type="text" align="LEFT" name="foto" value="<?php echo $registro['foto_a'];?>"/><p>
	<p>GENERO:
		
<input type="text" align="LEFT" name="gen" value="<?php echo $registro['gen_a'];?>"/><p>
	<p>
	<p>CURP:
	<input type="text" align="LEFT" name="curp" value="<?php echo $registro['curp_a'];?>"/><p>
	<p>CORREO:
	<input type="text" align="LEFT" name="cor" value="<?php echo $registro['correo_a'];?>"/><p>
	<p>ESTATUS:
	<input type="text"  align="LEFT" name="est" value="<?php echo $registro['ides_a'];?>"/><p>
	<p>CARRERA:
	<input type="text"  align="LEFT" name="car" value="<?php echo $registro['idc_a'];?>"/><p>
	<p>TURNO:
	<input type="text"  align="LEFT" name="tur" value="<?php echo $registro['id_t1'];?>"/><p>
	
	<input type="submit" value="Actualizar" name="actualizar">
	</form></div>
	<div align="center"><p><a href="edialum.php">EDITAR OTRO REGISTRO</a></p></div>

	</body>
	</html>
	<?PHP
}

if($_POST){
	$sql="UPDATE `alumno` SET
		nom_a='$_POST[nom]',
		apellp_a='$_POST[app]',
		apellm_a='$_POST[apm]',
		foto_a='$_POST[foto]',
		gen_a='$_POST[gen]',
		curp_a='$_POST[curp]',
		correo_a='$_POST[cor]',
		ides_a='$_POST[est]',
		idc_a='$_POST[car]',
	id_t1='$_POST[tur]'
		WHERE id_a=".$id;
		

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