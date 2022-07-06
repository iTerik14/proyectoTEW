<?php 
  require ("conexion.php");
  $usuario=$_POST['usuario'];
  $nombre=$_POST['nombre'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];
  $correo=$_POST['correo'];
  $telefono=$_POST['telefono'];
  
  $query= "INSERT INTO registro (usuario,nombre,password,password2,correo,telefono)  VALUES ('$usuario','$nombre','$password','$password2','$correo','$telefono')";

  $resultado=$conexion->query($query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Datos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fondos.css">
    <style>
        .main .datos{
            background-color: #ffb703;
            border-radius: 20px;
            width: 500px;
            height: 250px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            padding: 2px;
            font-size: 20px;
        }

        .main h3{
            font-size: 25px;
            font-family:'Times New Roman', Times, serif;
            color: initial;
        }
        .main .result{
            background-color: #ae2012;
            border-radius: 20px;
            width: 500px;
            height: 200px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            padding: 2px;
            color: aliceblue;
            line-height:40px;
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="header">
            <div class="logo"><a href="index.html"><img src="img/logo.png" alt="nitermc"></a></div>
        </header>

        <nav class="nav">

            <ul class="menu">
                <li>
                    <a class="link link1" href="index.html"><span class="icon-home"></span> Home</a>

                </li>
                <li>
                    <a class="link link2" href="tienda.html"><span class="icon-coin-dollar"></span> Tienda</a>

                </li>
                <li>
                    <a class="link link3" href="pagos.html"><span class="icon-file-text"></span> Metodos de Pago</a>
                </li>
                <li>
                    <a class="link link4" href="contacto.html"><span class="icon-phone"></span> Contacto</a>
                </li>
                <li>
                    <a class="link link5" href="#"><span class="icon-pushpin"></span> AcercaDe</a>
                </li>
            </ul>

            <ul class="log">
                <li>
                    <a href="#"><span class="icon-user"></span> login</a>
                </li>
                <li>
                    <a href="regis.php">Registro</a>
                </li>

            </ul>
        </nav>

        <section class="principal">
            <div class="name">
                <h2>Datos registrados</h2>
            </div>


            <main class="main">
                <div class="datos">
                    <h3>datos enviados</h3>
                    <?php
                        echo $usuario."<br>";
                        echo $nombre."<br>";
                        echo $password."<br>";
                        echo $password2."<br>";
                        echo $correo."<br>";
                        echo $telefono."<br>"; 
                    ?>
                </div>

                <div class="result">
                    <h3>estado</h3>
                    <?php
                        if($resultado>0)
                        {
                        echo "registro adicionado";
                        }
                        else
                        {
                        echo "error al adicionar los datos...";
                        }
                    ?>
                </div>

            </main>

            <!--
            <sidebar class="sidebar">sidebar</sidebar>
			-->
        </section>

        <footer class="footer">
            <div class="cont">
                <div class="logo">
                    <div class="logo"><a href="index.html"><img src="img/logo.png" alt="nitermc"></a></div>
                </div>
                <div>
                    <h4>
                        Somos un servidor apto para ofrecer <br>
                        variedad de diversion para nuestros usarios
                    </h4>
                </div>
            </div>

            <div class="redes">
                <a href="#"><span class="icon-whatsapp wa red"></span></a>
                <a href="#"><span class="icon-youtube2 yt red"></span></a>
                <a href="#"><span class="icon-twitter tw red"></span></a>
                <a href="#"><span class="icon-twitch red"></span></a>
                <a href="#"><span class="icon-facebook2 red"></span></a>
            </div>
        </footer>
    </div>

</body>

</html>