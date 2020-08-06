<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSS</title>

    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form class="box" action="" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
		
        <h1>Iniciar sesión</h1>
    
        <input type="text" name="username" placeholder="Usuario"></p>
      
        <input type="password" name="password" placeholder="Contraseña"></p>
        <input type="submit" value="Iniciar Sesión"></p>
  
	</form>
</body>
</html>