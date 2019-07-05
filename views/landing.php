<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Amor de Cristo-Ciénaga | Inicio</title>

		<link rel="stylesheet" href="./static/css/main.css">
		<link rel="stylesheet" href="./static/css/footer-main.css">
		<link rel="stylesheet" href="./static/css/about-main.css">
		<link rel="stylesheet" href="./static/css/connection-points-main.css">
		<link rel="stylesheet" href="./static/css/leaders-main.css">
		<link rel="stylesheet" href="./static/css/icons.css">
		<link rel="stylesheet" href="./static/css/jquery.gmaps.css">
		<link rel="stylesheet" href="./static/css/header-main.css">
		<link rel="stylesheet" href="./static/css/form-main.css">

		<script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous">
		</script>
		<script type="text/javascript" src="./static/js/main.js"></script>
	</head>
<body>
	<div id="super" class="hidden">
		<div id="login">
			<h2>Iniciar Sesión</h2>
			<div id="container-login">
				<div data-validate="">
					<span>Usuario</span>
					<input type="text" id="username" placeholder="Ejemplo@email.com">
				</div>

				<div data-validate="">
					<span>Contraseña</span>
					<input type="password" id="pass" placeholder="Segura">
				</div>

				<button id="send">Entrar</button>
				<p id="remember">¿Olvidó su contraseña?</p>
			</div>
		</div>
	</div>

	<header>
		<div id="logo">
			<img src="./static/img/imagotipo.png" alt="">
		</div>
		<div id="menu">
			<ul>
				<li>Quienes Somos</li>
				<li>Puntos de Conexion</li>
				<li>Departamentos</li>
				<li id="login-menu" onclick="javascript:login();">Ingresar</li>
			</ul>
		</div>
	</header>

	<div id="section-one">
		<video autoplay muted loop>
			<source src="./static/img/start.mp4" type="video/mp4">
		</video> 
	</div>

	<div id="elements">
		<div id="sections">
			<div id="about">
				<div id="mision">
	                <div class="contentAbout">
	                    <h2 id="about">Nuestra Misión</h2>
	                    <p id="textAbout">Cumplimos el mandato de nuestro señor Jesucristo "Por tanto id y haced discipulos..." Mateo 28:19; para este objetivo Ganamos, Consolidamos y Enviamos, Transformando la Sociedad con valores biblicos.</p>
	                </div>
	                <div class="imgAbout">
	                    <img src="./static/img/mision.jpg" alt="">
	                </div>
	            </div>

	            <div id="vision">
	                <div class="imgAbout">
	                    <img src="./static/img/vision.jpg" alt="">
	                </div>
	                <div class="contentAbout">
	                    <h2 id="about">Nuestra Visión</h2>
	                    <p id="textAbout">Buscamos en los nuevos convertidos un crecimiento cualitativo y cuantitativo con el proposito de fundamentarlos para que tengan una vida de abundancia a traves de los grupos de conexión, Escuelas de Discipulado y liderazgo, desarrollando en cada persona su potencial según el llamado de Dios.</p>
	                </div>
	            </div>
			</div>
			
			<div id="leaders">
				<h2 id="title-leaders">Nuestro Equipo</h2>
				<div id="list">
					<div class="people">
						<div class="img">
							<img src="./static/img/pastor.jpg" alt="carlos Alvarez">
						</div>
						<div class="description">
							<span class="position">Pastor</span>
							<span class="name">Carlos Álvarez</span>
						</div>
					</div>
					<div class="people">
						<div class="img">
							<img src="./static/img/pastora.jpg" alt="carlos Alvarez">
						</div>
						<div class="description">
							<span class="position">Pastora</span>
							<span class="name">Jackelin Ayola</span>
						</div>
					</div>
					<div class="people">
						<div class="img">
							<img src="./static/img/carlos.jpg" alt="carlos Alvarez">
						</div>
						<div class="description">
							<span class="position">Lider de Punto de Conexión</span>
							<span class="name">Carlos Álvarez</span>
						</div>
					</div>
				</div>
				<div id="see">
					<i class="icon-plus"></i>
				</div>
			</div>

			<div id="connection-points">
				<h2 id="title-connection-points">Puntos de Conexión</h2>
			</div>
		</div>
		
		<footer>
			<div id="fup">
				<div class="fup-section">
					<i class="icon-location-pin"></i>
					<span><b>Calle 20#17-06, Ciénaga-Madalena</b><br>Colombia</span>
				</div>
				<div class="fup-section">
					<i class="icon-mail"></i>
					<span><b>amordecristocienaga@gmail.com</b></span>
				</div>
			</div>
			<div id="fmedium">
				<div id="fus">
					<div>
						<img src="./static/img/isotipo.png" alt="">
					</div>
					<p>Cumplimos el mandato de nuestro señor Jesucristo "Por tanto id y haced discipulos..." Mateo 28:19; para este objetivo Ganamos, Consolidamos y Enviamos, Transformando la Sociedad con valores biblicos.</p>
					<div id="links">
						<div>
							<img src="./static/img/facebook.svg" alt="facebook">
						</div>
						<div>
							<img src="./static/img/instagram.svg" alt="facebook">
						</div>
						<div>
							<img src="./static/img/youtube.svg" alt="facebook">
						</div>
						<div>
							<img src="./static/img/twitter.svg" alt="facebook">
						</div>
						<div>
							<img src="./static/img/google+.svg" alt="facebook">
						</div>
					</div>
				</div>
				<div id="info">
					<div id="menu-info">
						<h3>enlaces rápidos</h3>
						<ul>
							<li><span>-</span> Quienes Somos</li>
							<li><span>-</span> Puntos de Conexión</li>
							<li><span>-</span> Departamentos</li>
						</ul>
					</div>

					<div id="service-info">
						<h3>Nuestros Servicios</h3>
						<ul>
							<li>Viernes 7:00 p.m. (UTC-5)</li>
							<li>Domingo 8:00 a.m. (UTC-5)</li>
						</ul>
					</div>
				</div>
				<div id="news">
					<h3>Noticias</h3>
					<div id="new">
						<div id="img-new">
							<img src="./static/img/new1.jpg" alt="">
						</div>
						<div id="text-new">
							<p id="title-new">Lorem ipsum dolor sit amet.</p>
							<span id="date-new">SEPT 02, 19</span>
						</div>
					</div>
					<div id="new">
						<div id="img-new">
							<img src="./static/img/new1.jpg" alt="">
						</div>
						<div id="text-new">
							<p id="title-new">Lorem ipsum dolor sit amet.</p>
							<span id="date-new">SEPT 02, 19</span>
						</div>
					</div>
				</div>
			</div>
			<div id="fdown">
				<span>© 2019 Amor de Cristo-Ciénaga</span> <span>All rights reserved | Privacy Policy</span>
			</div>
		</footer>
	</div>
</body>
</html>