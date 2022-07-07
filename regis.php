<?php 
    require('conexion.php');
    $query="SELECT * FROM registro";
	$resultado= $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fondos.css">
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
                <h2>Registro</h2>
            </div>


            <main class="main">

                <form action="adiciona_registro.php" method="post" class="formulario-registro">

                    <div id="errorUsuario"></div>
                    <label for="usuario">usuario</label> <br>
                    <input type="text" name="usuario" id="usuario" placeholder="erik14"></p>
                    
                    <div id="errorNombre"></div>
                    <label for="nombre">nombre</label><br>
                    <input type="text" name="nombre" id="nombre" placeholder="Erik Huayllas"></p>
                    
                    <div id="errorPass"></div>
                    <label for="password">contraseña</label><br>
                    <input type="password" name="password" id="password" placeholder="12345"></p>
                    
                    <div id="errorPass2"></div>
                    <label for="password2">repetir contraseña</label><br>
                    <input type="password" name="password2" id="password2" placeholder="12345"></p>
                    
                    <div id="errorCorreo"></div>
                    <label for="correo">correo</label><br>
                    <input type="email" name="correo" id="correo" placeholder="erik@gmail.com"></p>
                    
                    <div id="errorTelefono"></div>
                    <label for="telefono">telefono</label><br>
                    <input type="text" name="telefono" id="telefono" placeholder="75245874"></p>

                    <input type="submit" value="Enviar" onclick='enviarFormulario()' class="btn-enviar btn">
                    <input type="reset" value="Limpiar" class="btn-limpiar btn">

                </form>

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


    <!--<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    -->
    <script>
        let usuario = document.getElementById('usuario');
        let nombre = document.getElementById('nombre');
        let contra = document.getElementById('password');
        let contra2 = document.getElementById('password2');
        let correo = document.getElementById('correo');
        let telefono = document.getElementById('telefono');

        let errorUsuario = document.getElementById('errorUsuario');
        let errorNombre = document.getElementById('errorNombre');
        let errorContra = document.getElementById('errorPass');
        let errorContra2 = document.getElementById('errorPass2');
        let errorCorreo = document.getElementById('errorCorreo');
        let errorTelefono = document.getElementById('errorTelefono');



        errorUsuario.style.color = "red"
        errorNombre.style.color = "red"
        errorContra.style.color = "red"
        errorContra2.style.color = "red"
        errorCorreo.style.color = "red"
        errorTelefono.style.color = "red"


        function enviarFormulario() {

            if (usuario.value === null || usuario.value === '') {
                errorUsuario.innerHTML = "Ingrese su Usuario"
            }
            if (nombre.value === null || nombre.value === '') {
                errorNombre.innerHTML = "Ingrese su Nombre"
            }
            if (contra.value === null || contra.value === '') {
                errorContra.innerHTML = "Ingrese su Contraseña"
            }
            if (contra.value != contra2.value) {
                errorContra2.innerHTML = "tu contraseña debe ser igual"
            }
            if (correo.value === null || correo.value === '') {
                errorCorreo.innerHTML = "ingresa tu correo"
            }
            if (telefono.value === null || telefono.value === '') {
                errorTelefono.innerHTML = "ingresa tu telefono"
            }
            return false;
        }

    </script>
</body>

</html>