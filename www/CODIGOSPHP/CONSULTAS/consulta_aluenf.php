
<head>
  <meta charset="UTF-8">
    <title>Consultar - PSS</title>
  <link rel="icon" type="image/png" href="pss_icon.png" >
  <link rel="stylesheet" href="ostras.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../menuostia.php">Inicio</a></li>
        <li><a href="../CONSULTAS/consulta_aluenf.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_aluenf.php">Eliminar</a>
          <li><a href="../BUSCAR/buscar_aluenf.php">Buscar</a>
		  <li><a href="../INSERTAR/insertar_aluenf.php">Insertar</a></li>
		  <li><a href="../MODIFICAR/modificar_aluenf.php">Modificar</a></li>
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
$conexion = @mysql_connect($dbhost, $dbusuario, $dbpassword);

if (!$conexion)
   {
	exit('<p>No pudo realizarce la conexión a la base de datos.</p>');
   }
if (!@mysql_select_db($db, $conexion))
   {
	echo mysql_errno();
	exit ('<p>Problema al seleccionar la base de datos $db.</p>');
   }

	?>
    <html>
      <head> <meta charset="UTF-8">
    <title>PSS</title> <link rel="stylesheet" href="dis.css">
    <link rel="stylesheet" type="text/css" href="jamon.css">
    </head>
    <body>

    <header>
  <h1 id="titulo">  CONSULTA ALUMNO Y ENFERMEDAD </h1> </header>
  
  <div align="center">

  </body>
	</html>

<?
 	echo "<br>";
 	
  $sql =  "SELECT MATRICULA3,APE_P,APE_M,NOMBRE,NOM_ENF FROM ALUENF inner join ALUMNO on ALUENF.MATRICULA3=ALUMNO.MATRICULA inner join ENFERMEDAD on ALUENF.ID_ENF1=ENFERMEDAD.ID_ENF";
	$resultado1= @ mysql_query ($sql);
	if (!$resultado1)
	{
	 exit ('error en la consulta');
    }
    ?>
    <HTML>
    <BODY>
    <div id="main-container">
    <table align="center"  > <thead>
    <tr>
    <td>MATRICULA</td>
    <td>PRIMER APELLIDO</td>
    <td>SEGUNDO APELLIDO</td>
    <td>NOMBRE(S)</td>
    <td>ENFERMEDAD</td>
    
    </tr></thead>


 <?
while ($row=mysql_fetch_array ($resultado1))
{
echo "<tr><td>". $row["MATRICULA3"]. "</td>";
echo "<td>". $row["APE_P"]. "</td>";
echo "<td>". $row["APE_M"]. "</td>";
echo "<td>". $row["NOMBRE"]. "</td>";
echo "<td>". $row["NOM_ENF"]. "</td>";
}
    echo '</table>';
    '</body>
     </html>';
 mysql_close($conexion); ?>