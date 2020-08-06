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

    	<head> <title>Poli Search System 2.0</title><meta charset="UTF-8">
    	
    	<link rel="stylesheet" type="text/css" href="CSS/jamon.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<link rel="stylesheet" type="text/css" href="CSS/app.6d9c0a58.css">
    	<link rel="stylesheet" type="text/css" href="CSS/chunk-63b4102c.f0b10177.css">
    	<link rel="stylesheet" type="text/css" href="CSS/chunk-vendors.eeec13c0.css">
 <link rel="stylesheet" type="text/css" href="custom.css">
    
    <link rel="stylesheet"  href="normalize.css">
      

    	<link rel="icon" type="image/png" href="pss_icon.png" />


    	
    	
    	</head>
    	<body>

    <header>
        <header class="page-top">
    <div class="page-center"><br>
        <!-- Page logo -->
        <div class="page-logo">
            <a href="../CODIGOSPHP/index1.php">
                <img src="lougg.png">
            </a>
        </div>

        <!-- For future top links -->
        <div class="page-top-links">
        </div>
    </div>
</header>
<nav id="navbar" role="navigation">
    <div class="navlinks">
        <ul>
            <!-- Pages -->
            <li class="left big-nav"><a href="../CODIGOSPHP/index1.php">Home</a></li>
			<li class="left big-nav"><a href="../CODIGOSPHP/BUSQUEDA EN VIVO/prueb.php">Busqueda</a></li>
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
        <a class="small-nav" href="../CODIGOSPHP/index1.php">Home</a>
        <a class="small-nav" href="menuostia.php">Menu</a>
        <a class="small-nav" href="https://www.ipn.mx">IPN</a>
        
        <!--  <a class="small-nav" href="faq.php">FAQ</a> -->
        <a class="small-nav" href="about.php">About</a>
        <a class="small-nav" href="../CODIGOSPHP/includes/logout.php">Log out</a>
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


 		<div align="center"><br><br>

 			<div data-v-24e2eec2="" class="row categorias"><div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/01.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title"> 
                        SHIFTS 
                                    </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="CONSULTAS/consulta_turno.php" >Shifts</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="CONSULTAS/consulta_emptur.php" >Employees shifts</a></li></ul>
                                       

                                  <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_turno.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>






                  <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/a.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                     ACADEMIC PROGRAM
                 </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">Three programs offerred</a></li></ul>
                    <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_carrera.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>








                  <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2="" class=""><img data-v-24e2eec2="" src="IMG/MENU/b.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                          PHONE
                    </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="CONSULTAS/consulta_telefono.php" >Phone</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_alutel.php" >Students numbers</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_emptel.php" >Employees numbers</a></li></ul>
                                        <!--
                                        <a href="CONSULTAS/consulta_emptur.php"  target="_blank" onclick="window.open(this.href, this.target, 'width=1000,height=600'); return false;">Link popup</a>
                                          <br></br> -->

                                  <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_telefono.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>







                    <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/05.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                          EXTRACURRICULAR ACTIVITIES
                      </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_actext.php" >Extra activities</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_alumext.php" >Students  extra activities</a></li></ul>

                                  <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_actext.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>



                      <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/c.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                              STATUS
                        </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">
                        The current status of our students</a></li></ul>
                    <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_estatus.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>




                        <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/02.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                                STUDENTS   
                          </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">All of
                          the students in this facility</a></li></ul>
                    <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_alumno.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>



                          



                            <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/03.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                                    EMPLOYEES
                              </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">All of the employees working in this facility</a></li></ul>
                    <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_empleado.php" class="btn btn-categorias">Show &gt;</a></a></div></div></div>




                          



                     



                   



                     <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/san.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                                      BLOOD TYPE
                                </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">All of them</a></li></ul>
                    <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_sangre.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>





                      <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/enf.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                                       DISEASES
                                </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_enf.php" >Diseases</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_aluenf.php" >
                                      Students diseases</a></li></ul>
                                      
                                  <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_enf.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>








                    <div data-v-24e2eec2="" class="col-sm-12 col-md-6 col-lg-3"><div data-v-24e2eec2="" class="card text-center card-gob"><div data-v-24e2eec2="" class="titulocategoria"><a data-v-24e2eec2=""  class=""><img data-v-24e2eec2="" src="IMG/MENU/dis.png" alt="" class="card-img-top card-img-gob"><h4 data-v-24e2eec2="" class="card-title">
                                     DISABLED CONDITIONS
                                </h4></a></div><div data-v-24e2eec2="" class="card-body"><ul data-v-24e2eec2="" class="list-unstyled"><li data-v-24e2eec2="">

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_dis.php" >Disabled
                                      conditions</a></li>

                                      <li data-v-24e2eec2=""><a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_aludis.php" >Disabled
                                      students</a></li></ul>
                                      
                                  <a data-v-24e2eec2="" href="../CODIGOSPHP/CONSULTAS/consulta_dis.php"  class="btn btn-categorias">Show &gt;</a></a></div></div></div>





   

    </body>

	</html>

	