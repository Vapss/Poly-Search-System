
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
        <li><a href="../CONSULTAS/consulta_enf.php">Consultar</a></li>
        <li><a href="../BORRAR/borrar_enf.php">Eliminar</a>
          <li><a href="../BUSCAR/buscar_enfermedad.php">Buscar</a>
		  <li><a href="../INSERTAR/insertar_enfermedad.php">Insertar</a></li>
		  <li><a href="../MODIFICAR/modificar_enfermedad.php">Modificar</a></li>
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
	exit('<p>No pudo realizarce la conexi�n a la base de datos.</p>');
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
    <h1 id="titulo">  CONSULTA ENFERMEDAD </h1> </header>
    <div align="center">
    </body>
	</html>

<?
 	echo "<br>";
 	$sql =  "Select * from ENFERMEDAD";
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
    <td>ID</td>
    <td>ENFERMEDAD</td>
    </tr></thead>


 <?
while ($row=mysql_fetch_array ($resultado1))
{
echo "<tr><td>". $row["ID_ENF"]. "</td>";
echo "<td>". $row["NOM_ENF"]. "</td>";
}
    echo '</table>';
    '</body>
     </html>';
 mysql_close($conexion); ?>