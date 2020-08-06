
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

// CAMBIAR EL NOMBRE DE LA TABLA
$tabla="alumno";

$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion){
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
}
if (!@mysql_select_db($db, $conexion)){
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
}

 //CONSULTA SANGRE
        $ssangre="SELECT * FROM SANGRE ";
        $qsangre=mysql_query($ssangre);

         //CONSULTA TURNO
        $sturno="SELECT * FROM TURNO ";
        $qturno=mysql_query($sturno);

         //CONSULTA CARRERA
        $scarrera="SELECT * FROM CARRERA ";
        $qcarrera=mysql_query($scarrera);

         //CONSULTA STATUS
        $sestatus="SELECT * FROM ESTATUS ";
        $qestatus=mysql_query($sestatus);


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
    <h1 id="titulo">  MODIFICAR ALUMNO </h1> </header>
    <div align="center">
    </body>
	</html>

	<?
		$sql =  "SELECT MATRICULA,NOMBRE,APE_P,APE_M,FOTO,GRUPO,GENERO,CURP,CORREO,PESO, ALTURA,TIP_SAN, NOM_TURNO,NOM_CARRERA,NOM_ESTATUS FROM ALUMNO inner join SANGRE on ALUMNO.ID_SAN1=SANGRE.ID_SAN inner join  TURNO on ALUMNO.ID_TURNO1=TURNO.ID_TURNO inner join CARRERA on ALUMNO.ID_CARRERA1=CARRERA.ID_CARRERA inner join ESTATUS ON ALUMNO.ID_ESTATUS1=ESTATUS.ID_ESTATUS ";

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

    </tr> </thead>

<!-- 3: CAMBIAR LOS VALORES EXACTOS COMO SQL DE LA TABLA -->
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
echo "<td>". $row["TIP_SAN"]. "</td>";
echo "<td>". $row["NOM_TURNO"]. "</td>";
echo "<td>". $row["NOM_CARRERA"]. "</td>";
echo "<td>". $row["NOM_ESTATUS"]. "</td>";
	
									// 4. CAMBIAR LA CLAVE PRIMARIA
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
								// 5. CAMBIAR CLAVE PRIMARIA
		$sql = "SELECT * FROM ".$tabla." WHERE MATRICULA=".$id;
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
	<form action="<?php echo $_SERVER['PHP_self'];?>" method="post" name="modificar_alumno.PHP">
<!-- 7. CAMBIAR LOS NOMBRES Y LOS VALORES COMO EN SQL -->
	<p>			
	<input type="hidden" align="LEFT" name="MATRICULA" value="<?php echo $registro['MATRICULA'];?>" /><p>
		<br><h2>Modifique los datos con cuidado y al terminar presione GUARDAR<br> </h2>
<br><br>
	<p>NOMBRE:
	<input type="text" align="LEFT" name="NOMBRE" value="<?php echo $registro['NOMBRE'];?>"/><p><br>

	<p>PRIMER APELLIDO:
	<input type="text" align="LEFT" name="APE_P" value="<?php echo $registro['APE_P'];?>"/><p><br>

	<p>SEGUNDO APELLIDO:
	<input type="text" align="LEFT" name="APE_M" value="<?php echo $registro['APE_M'];?>"/><p><br>

	<p>FOTO:
	<input type="text" align="LEFT" name="FOTO" value="<?php echo $registro['FOTO'];?>"/><p><br>

	<p>GRUPO:
	<input type="text" align="LEFT" name="GRUPO" value="<?php echo $registro['GRUPO'];?>"/><p><br>

	<p>
	GENERO:
      <select name="GENERO" value="<?php echo $registro['GENERO'];?>">
      <option>HOMBRE</option>
      <option>MUJER</option>
      </select><br><br></p><br><p>
	
	<p>CURP:
	<input type="text" align="LEFT" name="CURP" value="<?php echo $registro['CURP'];?>"/><p><br>
	
	<p>CORREO:
	<input type="text" align="LEFT" name="CORREO" value="<?php echo $registro['CORREO'];?>"/><p><br>
	
	<p>PESO:
	<input type="text" align="LEFT" name="PESO" value="<?php echo $registro['PESO'];?>"/><p><br>
	
	<p>ALTURA:
	<input type="text" align="LEFT" name="ALTURA" value="<?php echo $registro['ALTURA'];?>"/><p><br>
	
	<p>SANGRE:
    <select name="ID_SAN1" value="<?php echo $registro['ID_SAN1'];?>"/>
      <? while($asangre=mysql_fetch_array($qsangre))  { ?>
      <option value="<? echo $asangre['ID_SAN']?> ">
      <? echo $asangre['TIP_SAN']?></option><? } ?>  </select><br><br><p>
	
	<p>TURNO:
	<select name="ID_TURNO1" value="<?php echo $registro['ID_TURNO1'];?>"/>
        <? while($aturno=mysql_fetch_array($qturno))  { ?>
        <option value="<? echo $aturno['ID_TURNO']?> ">
        <? echo $aturno['NOM_TURNO']?></option><? } ?>  </select><br><br>
        
	<p>CARRERA:
    <select name="ID_CARRERA1" value="<?php echo $registro['ID_CARRERA1'];?>"/>
        <? while($acarrera=mysql_fetch_array($qcarrera))  { ?>
        <option value="<? echo $acarrera['ID_CARRERA']?> ">
        <? echo $acarrera['NOM_CARRERA']?></option><? } ?>  </select><br><br>

	<p>ESTATUS:
	<select name="ID_ESTATUS1" value="<?php echo $registro['ID_ESTATUS1'];?>"/>
        <? while($aestatus=mysql_fetch_array($qestatus))  { ?>
        <option value="<? echo $aestatus['ID_ESTATUS']?> ">
        <? echo $aestatus['NOM_ESTATUS']?></option><? } ?>  </select><br><br>

	

	
	<input type="submit" align="center" value=" 	 	GUARDAR  	 	" name="actualizar">
	</form></div>
	<!-- 8: CAMBIAR AL NOMBRE DEL PHP ACUTAL--><br><br>
	<div align="center"><p><a href="modificar_alumno.php">Volver</a></p></div>
	 

	</body>
	</html>
<?PHP
}

if($_POST){

	

 	//CAMBIAR LOS VALORES COMO EN SQL
 	// SI NECESITAS MAS VARIABLES SUBS, SOLO CONTINUA EL ABECEDARIO
$subs_A = utf8_decode($_POST['MATRICULA']);
$subs_B = utf8_decode($_POST['NOMBRE']);
$subs_C = utf8_decode($_POST['APE_P']);
$subs_D = utf8_decode($_POST['APE_M']);
$subs_E = utf8_decode($_POST['FOTO']);
$subs_F = utf8_decode($_POST['GRUPO']);
$subs_G = utf8_decode($_POST['GENERO']);
$subs_H = utf8_decode($_POST['CURP']);
$subs_I = utf8_decode($_POST['CORREO']);
$subs_J = utf8_decode($_POST['PESO']);
$subs_K = utf8_decode($_POST['ALTURA']);
$subs_L = utf8_decode($_POST['ID_SAN1']);
$subs_M = utf8_decode($_POST['ID_TURNO1']);
$subs_N = utf8_decode($_POST['ID_CARRERA1']);
$subs_O = utf8_decode($_POST['ID_ESTATUS1']);


		$sql="UPDATE ".$tabla." SET
		NOMBRE='$subs_B',
		APE_P='$subs_C',
		APE_M='$subs_D',
		FOTO='$subs_E',
		GRUPO='$subs_F',
		GENERO='$subs_G',
		CURP='$subs_H',
		CORREO='$subs_I',
		PESO='$subs_J',
		ALTURA='$subs_K',
		ID_SAN1='$subs_L',
		ID_TURNO1='$subs_M',
		ID_CARRERA1='$subs_N',
		ID_ESTATUS1='$subs_O'
		WHERE MATRICULA=".$id;
		

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