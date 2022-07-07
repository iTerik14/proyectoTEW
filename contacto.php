<?php 
    require('conexion.php');
    $query="SELECT * FROM contacto";
	$resultado= $conexion->query($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="stylesheet" href="fondos.css">
    
    <style>
        .form .enviar{
            cursor: pointer;
            width: 90px;
            background-color: brown;
            border-radius: 15px;
            margin-left: auto;
            margin-right: auto;
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
                    <a class="link link4" href="contacto.php"><span class="icon-phone"></span> Contacto</a>
                </li>
                <li>
                    <a href="regis.php"><span class="icon-user-check"></span> Registro</a>
                </li>
            </ul>
        </nav>

        <section class="principal">
            <div class="name">
                <h2>Contacto</h2>
            </div>


            <main class="main">
                <form action="adiciona_contacto.php" method="post">
                    <div class="form">
                        <h1>Contactame</h1>
                        <div class="grupo">
                            <input type="text" name="nombre" id="" required><span class="barra"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="grupo">
                            <input type="email" name="correo" id="" required><span class="barra"></span>
                            <label>Email</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="edad" id="" required><span class="barra"></span>
                            <label>Edad</label>
                        </div>
                        <div class="grupo">
                            <input type="text" name="mensaje" id="mensaje"></input><span class="barra"></span>
                            <label>Mensaje</label>
                        </div>
                        <input type="submit" value="Enviar" class="enviar"></input>
                    </div>
                </form>

            </main>
            <!--
            <sidebar class="sidebar">

                <div class="container-box">
                    <span class="icon-search"></span>
                    <input type="search" id="search" placeholder="Search..." />
                    <button>ir</button>
                </div>


                <div class="estado">
                    <h3>estado del servidor</h3>

                </div>
            </sidebar>
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