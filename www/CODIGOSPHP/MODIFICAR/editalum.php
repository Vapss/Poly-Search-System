

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
	$sql = "SELECT MATRICULA,NOMBRE,APE_P,APE_M,FOTO,GRUPO,GENERO,CURP,CORREO,PESO, ALTURA,TIP_SAN, NOM_TURNO,NOM_CARRERA,NOM_ESTATUS FROM ALUMNO inner join SANGRE on ALUMNO.ID_SAN1=SANGRE.ID_SAN inner join  TURNO on ALUMNO.ID_TURNO1=TURNO.ID_TURNO inner join CARRERA on ALUMNO.ID_CARRERA1=CARRERA.ID_CARRERA inner join ESTATUS ON ALUMNO.ID_ESTATUS1=ESTATUS.ID_ESTATUS ";

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
    <td>EDITAR</td>
    
  </tr>
 <?
while ($row=mysql_fetch_array ($resultado))
{
	echo "<tr><td>". $row["MATRICULA"]. "</td>";
echo "<td>". $row["NOMBRE"]. "</td>";
echo "<td>". $row["APE_P"]. "</td>";
echo "<td>". $row["APE_M"]. "</td>";
echo "<td>"."<img src=\" ".$row[FOTO]."\" /*width=20,*/ height=75,>"."</td>";
echo "<td>". $row["GRUPO"]. "</td>";
echo "<td>". $row["GENERO"]. "</td>";
echo "<td>". $row["CURP"]. "</td>";
echo "<td>". $row["CORREO"]. "</td>";
echo "<td>". $row["PESO"]. "</td>";
echo "<td>". $row["ALTURA"]. "</td>";
echo "<td>". $row["TIP_SAN"]. "</td>";
echo "<td>". $row["NOM_TURNO"]. "</td>";
echo "<td>". $row["NOM_CARRERA"]. "</td>";
echo "<td>". $row["NOM_ESTATUS"]. "</td>";
  echo "<td><a href=".$_SERVER['PHP_SELF']."?cambiar=".$row['MATRICULA'].">Editar</a></td></tr>";
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

		$sql = "SELECT * FROM alumno WHERE MATRICULA=".$id;
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