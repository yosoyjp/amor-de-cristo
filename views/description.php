<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Areas de Servicio</title>

		<link rel="stylesheet" href="./static/css/footer.css">
		<link rel="stylesheet" href="./static/css/icons.css">
		<link rel="stylesheet" href="./static/css/header.css">
		<link rel="stylesheet" href="./static/css/form-login.css">
		<link rel="stylesheet" href="./static/css/description.css">

		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script type="text/javascript" src="./static/js/description.js"></script>
		<script type="text/javascript" src="./static/js/login.js"></script>
		<script type="text/javascript" src="./static/js/footer.js"></script>
		<script type="text/javascript" src="./static/js/menu.js"></script>
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
				<a href="./" id="img-logo"><img src="./static/img/imagotipo.png" alt=""></a>
				<a class="menu-btn" id="menu-btn"><i class="icon-menu icon"></i></a>
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

		<div id="elements">
			<div id="sections">
				<div id="description-area">
					<div id="img-description-area">
						
					</div>
					<div id="text-description-area">
						<h2>Danza</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quaerat pariatur error expedita quis perferendis quos, quia fugit veniam sunt laudantium voluptate quibusdam aliquam illo impedit magnam perspiciatis rem saepe in voluptatibus tempora. Nobis, nostrum, fuga? Natus voluptates necessitatibus consectetur dolorem nobis accusamus iure repellendus quaerat debitis vero eaque officiis, explicabo ab? Aliquam sint eligendi magni reprehenderit totam aperiam omnis unde similique laudantium maiores ipsam, nesciunt voluptatum repudiandae est nisi quasi accusantium numquam quos, modi quaerat voluptas debitis neque dicta!</p>
						<span>Lorem ipsum dolor.</span>
					</div>
				</div>

				<div id="container-team-area">
					<h2>Equipo</h2>

					<div id="team-area">
						<i class="icon-chevron-left"></i>
						<div id="list-team-area">
							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>

							<div id="people">
								<div id="img-people">
									<img src="./static/img/daniela-de-la-hoz.jpg" alt="">
								</div>
								<span id="name">Daniela de La Hoz</span>
								<span id="ocupation">Lider</span>
							</div>
						</div>
						<i class="icon-chevron-right"></i>
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
						<div id="img-us">
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