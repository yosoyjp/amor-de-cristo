<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Amor de Cristo-Ciénaga | Inicio</title>

		<link rel="stylesheet" href="./static/css/main.css">
		<link rel="stylesheet" href="./static/css/footer.css">
		<link rel="stylesheet" href="./static/css/about-main.css">
		<link rel="stylesheet" href="./static/css/connection-points-main.css">
		<link rel="stylesheet" href="./static/css/leaders-main.css">
		<link rel="stylesheet" href="./static/css/service-area-main.css">
		<link rel="stylesheet" href="./static/css/icons.css">
		<link rel="stylesheet" href="./static/css/jquery.gmaps.css">
		<link rel="stylesheet" href="./static/css/header.css">
		<link rel="stylesheet" href="./static/css/preach-main.css">
		<link rel="stylesheet" href="./static/css/shedule-main.css">
		<link rel="stylesheet" href="./static/css/form-login.css">

		<script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script type="text/javascript" src="./static/js/main.js"></script>
		<script type="text/javascript" src="./static/js/slide.js"></script>
		<script type="text/javascript" src="./static/js/login.js"></script>
		<script type="text/javascript" src="./static/js/footer.js"></script>
	</head>
	<body>
		<div id="super" class="hidden">
			<div id="login">
				<div id="help">
					<i id="back-login" class="icon-chevron-thin-left remember-see"></i>
					<h2 id="title-login">Iniciar Sesión</h2>
				</div>
				<div id="container-login">
					<div id="user">
						<span>Usuario</span>
						<input type="text" id="username" placeholder="Ejemplo@email.com">
					</div>

					<div id="password">
						<span>Contraseña</span>
						<input type="password" id="pass" placeholder="Segura">
					</div>

					<p id="remember-text"></p>
					<button id="send">Entrar</button>
					<p class="remember-see" id="remember">¿Olvidó su contraseña?</p>
				</div>
			</div>
		</div>

		<header>
			<div id="logo">
				<a href="./landing.php"><img src="./static/img/imagotipo.png" alt=""></a>
			</div>
			<div id="menu">
				<ul>
					<li><a class="anchor" href="#about">Quienes Somos</a></li>
					<li><a class="anchor" href="#leaders">Nuestro Equipo</a></li>
					<li><a class="anchor" href="#connection-points">Puntos de Conexión</a></li>
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
					<h2 id="title-leaders">NUESTRO EQUIPO</h2>
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

				<div id="preach">
					<div id="img-preach">
						<div id="marco"></div>
						<img src="./static/img/preach.jpg" alt="">
					</div>
					<a href="">
						<div id="text-preach">
							<div>
								<h3>"TODOS TENEMOS ALGO QUE DAR"</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores facilis officiis natus! Accusantium facere labore ea iusto tempora voluptatem cumque molestias neque in corporis incidunt, saepe quidem quibusdam! Doloremque, nemo.</p>
								<span>P. Carlos Alvarez</span>
							</div>
						</div>
					</a>

					<div id="separator">
						<hr>
						<div></div>
						<hr>
					</div>
				</div>

				<div id="connection-points">
					<h2 id="title-connection-points">PUNTOS DE CONEXIÓN</h2>

					<p id="text-connection-points">Es nuestra pasión llevar el mensaje de la verdad a todos los rincones de nuestra ciudad, por ello Amor de Cristo semana tras semana está presente en distintos lugares en los que nuestras Redes se reunen para compartir y disfrutar un momento contigo. Estos son nuestros puntos de Conexión:</p>

					<div id="img-connection">
						<img id="image-map" src="./static/img/mapa.png" alt="Mapa de puntos de conexión">
					</div>
				</div>

				<div id="service-area">
					<h2 id="title-service-area">ÁREAS DE SERVICIO</h2>

					<p id="text-service-area">Conocémos que la mejor decisión que podemos tomar al momento de seguir a Jesús es servirle, por ello Nuestra casa tiene diversas areas y de ellas tú puedes ser parte.</p>

					<div id="areas">
						<a href="./description">
							<div class="area" id="server">
								<span>SERVIDORES</span>
							</div>
						</a>

						<a href="./description">
							<div class="area" id="master">
								<span>MAESTROS</span>
							</div>
						</a>

						<a href="./description">
							<div class="area" id="praise">
								<span>MUSICA</span>
							</div>
						</a>

						<a href="./description">
							<div class="area" id="dance">
								<span>DANZA</span>
							</div>
						</a>

						<a href="./description">
							<div class="area" id="multimedia">
								<span>MULTIMEDIA</span>
							</div>
						</a>

						<a href="./description">
							<div class="area" id="other">
								<span>OTROS</span>
							</div>
						</a>
					</div>
				</div>

				<div id="shedule">
					<h2 id="title-shedule">AGENDA</h2>
						
					<div id="next">
						<div id="img-next">
							<img id="src-img-next" src="./static/img/next.jpg" alt="">
						</div>
						<div id="text-next">
							<span id="title-next-event">Servicio Juvenil</span>
							<span id="date-next-event">JUL 21, 2019 - 6:45 p.m.</span>
						</div>
					</div>

					<div id="all-events">
						<i class="icon-chevron-left"></i>
						<div id="list-events">
							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/event-1.jpg" alt="">
								<span class="title-event">Fiesta de Primicias</span>
								<span class="date-event">FEB 2, 2019 - 5:00 p.m.</span>
							</div>
						</div>
						<i class="icon-chevron-right activ"></i>
					</div>
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
							<a href="https://www.facebook.com/AmordeCristoCienaga/" target="_blank">
								<div>
									<img src="./static/img/facebook.svg" alt="Facebook">
								</div>
							</a>
							<a href="https://www.instagram.com/amordecristo_cienaga/" target="_blank">
								<div>
									<img src="./static/img/instagram.svg" alt="Instagram">
								</div>
							</a>
							<a href="https://www.youtube.com/channel/UCAzsCmNAWZOqKZQDU19-lTw" target="_blank">
								<div>
									<img src="./static/img/youtube.svg" alt="Youtube">
								</div>
							</a>
							<a href="https://twitter.com/amordecristo_c" target="_blank">
								<div>
									<img src="./static/img/twitter.svg" alt="Twitter">
								</div>
							</a>
						</div>
					</div>
					<div id="info">
						<div id="menu-info">
							<h3>Enlaces rápidos</h3>
							<ul>
								<li><span>-</span> <a class="anchor" href="#about">Quienes Somos</a></li>
								<li><span>-</span> <a class="anchor" href="#leaders">Nuestro Equipo</a></li>
								<li><span>-</span> <a class="anchor" href="#connection-points">Puntos de Conexión</a></li>
							</ul>
						</div>

						<div id="service-info">
							<h3>Nuestros Servicios</h3>
							<ul>
								<li>Domingo 8:00 a.m. (UTC-5)</li>
								<li>Viernes 7:00 p.m. (UTC-5)</li>
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
					<span>© 2019 Amor de Cristo</span> <span>Todos los derechos reservados</span>
				</div>
			</footer>
		</div>
	</body>
</html>