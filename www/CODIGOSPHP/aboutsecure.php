    
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="custom.css">
    
    <link rel="stylesheet"  href="normalize.css">
    <link rel="stylesheet" type="text/css" href="jamon.css">
    <!-- General meta tags -->
	<meta name="robots" content="all">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">

 
    <!-- Styling -->
	<link rel="icon" type="image/png" href="pss_icon.png" >
    <link href="css/normalize.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="juxtapose/css/juxtapose.css">

	<!-- Custom Fonts from Google -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>    <title>Acerca de - Poli Search System</title>
</head>

<body>

<header>
        <header class="page-top">
    <div class="page-center">
        <!-- Page logo -->
        <div class="page-logo">
            <a href="../CODIGOSPHP/index2.php">
                <img src="../CODIGOSPHP/lougg.png">
            </a>
        </div>

        <!-- For future top links -->
        <div class="page-top-links">
        </div>
    </div>
</header>

<!-- Navigation bar -->
<nav id="navbar" role="navigation">
    <div class="navlinks">
        <ul>
            <!-- Pages -->
            <li class="left big-nav"><a href="../CODIGOSPHP/index2.php">Home</a></li>
      <!--       <li class="left big-nav"><a href="menuostia.php">Menu</a></li>
           
            <li class="left big-nav"><a href="https://r3dcraft.net/download.php">Download</a></li>
            <li class="left big-nav"><a href="https://r3dcraft.net/forum.php">Forum</a></li>
            <li class="left big-nav"><a href="https://r3dcraft.net/faq.php">FAQ</a></li>
            <li class="left big-nav"><a href="about.php">Acerca de</a></li>  -->
            
            <!-- Use any element to open the sidenav -->
            <li class="right dropdown" onclick="openNav()">
                <a href="javascript:void(0)" class="dropbtn ">
                    <span>☰</span>
                </a>
            </li>

               <!--         <li class="right">
                <a href="menuostia.php">Menu</a>
            </li>  -->
            
</ul>
    </div>

    <div id="mySidenav" class="sidenav" style="width: 0px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                
        <!-- Small view menu pages -->
        <a class="small-nav" href="../CODIGOSPHP/home.html">Home</a>
        <a class="small-nav" href="../CODIGOSPHP/menuostia.php">Menu</a>
        <a class="small-nav" href="https://www.ipn.mx">IPN</a>
        
        <!--  <a class="small-nav" href="faq.php">FAQ</a> -->
        <a class="small-nav" href="../CODIGOSPHP/about.php">Acerca de</a>
    </div>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <div class="bottom-line"></div>
</nav>
    

	<div class="page-start">

        <h1 class="page-title">Acerca de</h1>

        <h2>Sobre el sistema</h2>

        <p><strong>POLI SEARCH SYSTEM</strong> , ES UN PROGRAMA CREADO EN PHP EL CUAL NOS PERMITE SABER LOS DATOS DE LOS ALUMNOS Y DOCENETES QUE INGRESAN AL PLANTEL, MOSTRANDO TODA SU INFORMACION DEL MISMO CON LA FINALIDAD DE QUE LOS ELEMENTOS DE
		SEGURIDAD DEL PLANTEL TENGAN CONOCIMIENTO SI EL ALUMNO O DOCENTE PERTENECE AL PLANTEL SIN NECESIDAD DE PORTAR LA CREDENCIAL.</p>


         <h2>Sobre los desarrolladores</h2>

        <p><strong>DESARROLLADORES</strong>
		<u>
		<li>Cristopher Jesus Limon Cruz </li>
        <li>Isaac Garcia Sanchez</li>
		<li>Ezequiel Perez Carbajal </li>
		<li>Jose Antonio Vazquez Portuguez </li>
		<li>Miguel Josue Baeza Casimiro </li>
		</u>

        <h2>Sobre las herramientas</h2>

        <p>
           LAS HERRAMIENTAS QUE FUERON UTULIZADAS PARA LA ELABORACION DEL PROYECTO SON:
        </p>
        <strong>HERRAMIENTAS:</strong>
        <ul>
            <li>MySLQ, Para la programacion de la base de datos.</li>
            <li>NotePad ++, para la progamacion de las paginas en PHP y HTML.</li>
            <li>Adobe Photoshop, para la edicion de las imgenes y diseño de la pagina web.</li>
            <li>AppServ, para la conexion al servidor local de nuestro proyecto y compatibilidad con PHP.</li>
        </ul>
             <!-- TWITTER EN PAGINA-->       <!-- 
        <br><div class="social-media">
            <a class="twitter-timeline" href="https://twitter.com/Alvtron">Tweets by Alvtron</a>
        </div>  -->

	</div>
    
	<h1 id="titulo">  POLI SEARCH SYSTEM </h1> </header>
<footer class="page-footer">

    <!-- Copyright etc -->
    <div class="small-print">
        <div class="container">
            
            <a href="../CODIGOSPHP/about.php" style="text-decoration: none">Acerca de</a>
            <span> | </span>
            <a href="https://es.wikipedia.org/wiki/HTML" style="text-decoration: none">HTML</a>
            <span> | </span>
            <a href="https://www.php.net/" style="text-decoration: none">PHP</a>
            <span> | </span>
            <a href="http://www.ipn.mx" style="text-decoration: none">IPN</a>
            <p>Copyright © PSS 2019
            
            </p>
        </div>
    </div>   
    
</footer>
   

</body>

</html>
