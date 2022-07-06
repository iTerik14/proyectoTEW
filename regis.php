<?php 
    require('conexion.php');
    $query="SELECT * FROM bibliotecario";
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
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/style.css">
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
                    <a href="registro.html">Registro</a>
                </li>
                <li>
                    <a href="#"><span class="icon-cart"></span> Carrito</a>
                </li>
                
            </ul>
        </nav>

        <section class="principal">
            <div class="name">
                <h2>Registro</h2>
            </div>

            <main class="main">
				<form action="adiciona_registro.php" class="formulario" id="formulario" method="post">
					<!-- Grupo: Usuario -->
					<div class="formulario__grupo" id="grupo__usuario">
						<label for="usuario" class="formulario__label">Usuario</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="erik14">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener letras y guion bajo.</p>
					</div>
		
					<!-- Grupo: Nombre -->
					<div class="formulario__grupo" id="grupo__nombre">
						<label for="nombre" class="formulario__label">Nombre</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Erik">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
					</div>
		
					<!-- Grupo: Contraseña -->
					<div class="formulario__grupo" id="grupo__password">
						<label for="password" class="formulario__label">Contraseña</label>
						<div class="formulario__grupo-input">
							<input type="password" class="formulario__input" name="password" id="password">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
					</div>
		
					<!-- Grupo: Contraseña 2 -->
					<div class="formulario__grupo" id="grupo__password2">
						<label for="password2" class="formulario__label">Repetir Contraseña</label>
						<div class="formulario__grupo-input">
							<input type="password" class="formulario__input" name="password2" id="password2">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
					</div>
		
					<!-- Grupo: Correo Electronico -->
					<div class="formulario__grupo" id="grupo__correo">
						<label for="correo" class="formulario__label">Correo Electrónico</label>
						<div class="formulario__grupo-input">
							<input type="email" class="formulario__input" name="correo" id="correo" placeholder="erik@gmail.com">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
					</div>
		
					<!-- Grupo: Teléfono -->
					<div class="formulario__grupo" id="grupo__telefono">
						<label for="telefono" class="formulario__label">Celular</label>
						<div class="formulario__grupo-input">
							<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="73258478">
							<i class="formulario__validacion-estado fas fa-times-circle"></i>
						</div>
						<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
					</div>
		
					<!-- Grupo: Terminos y Condiciones -->
					<div class="formulario__grupo" id="grupo__terminos">
						<label class="formulario__label">
							<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
							Acepto los Terminos y Condiciones
						</label>
					</div>
		
					<div class="formulario__mensaje" id="formulario__mensaje">
						<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
					</div>
		
					<div class="formulario__grupo formulario__grupo-btn-enviar">
						<button type="submit" class="formulario__btn">Enviar</button>
						<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
					</div>
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
	

	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>