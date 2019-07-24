<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Sitio Web oficial de la Iglesia Amor de Cristo - Cienaga Magdalena"/>
		<title>Amor de Cristo-Ciénaga | Inicio</title>

		<link rel="stylesheet" href="./static/css/main.css">
		<link rel="stylesheet" href="./static/css/footer.css">
		<link rel="stylesheet" href="./static/css/about-main.css">
		<link rel="stylesheet" href="./static/css/connection-points-main.css">
		<link rel="stylesheet" href="./static/css/leaders-main.css">
		<link rel="stylesheet" href="./static/css/service-area-main.css">
		<link rel="stylesheet" href="./static/css/icons.css">
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
		<script type="text/javascript" src="./static/js/menu.js"></script>
	</head>
	<body>
		<div id="super" class="hidden">
			<div id="buttons">
				<i id="back-login" class="icon-chevron-left remember-see"></i>
				<i id="close-login" class="icon-cross"></i>
			</div>
			<div id="login">
				<div id="help">
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
				<a href="../../" id="img-logo"><img src="./static/img/imagotipo.png" alt=""></a>
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

		<div id="section-one">
			<video autoplay muted loop poster="./static/img/pre-video.jpg" >
				<source src="./static/img/video.webm" >
			</video> 
		</div>

		<div id="elements">
			<div id="sections">
				<div id="about">
					<div id="mision">
		                <div class="imgAbout">
		                    <img src="./static/img/mision.jpg" alt="">
		                </div>
		                <div class="contentAbout">
		                    <h2 id="about">Nuestra Misión</h2>
		                    <p id="textAbout">Cumplimos el mandato de nuestro señor Jesucristo "Por tanto id y haced discipulos..." Mateo 28:19; para este objetivo Ganamos, Consolidamos y Enviamos, Transformando la Sociedad con valores biblicos.</p>
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
					<div id="list-leaders">
						<div class="people">
							<div class="img">
								<img src="./static/img/pastor.jpg" alt="carlos Alvarez">
							</div>
							<div class="description">
								<span class="position">Pastor</span>
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
					<a>
						<div id="text-preach">
							<div>
								<h3>CAMINO AL OLVIDO</h3>
								<p>"El que mucho se ausenta, poco a poco dejará de hacer falta." En algún momento de mi existencia llegué a pensar que mi ausencia provocaría un efecto de atención favorable, más meditando en Galatas 6:7 debemos reconocer que el fruto será proporcional a mi comportamiento... Así que sembraremos compañía, <strong>"presencia"</strong> para así Segar lo mismo.</p>
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
						<div id="map"></div>
					</div>
				</div>

				<div id="service-area">
					<h2 id="title-service-area">ÁREAS DE SERVICIO</h2>

					<p id="text-service-area">Conocémos que la mejor decisión que podemos tomar al momento de seguir a Jesús es servirle, por ello Nuestra casa tiene diversas areas y de ellas tú puedes ser parte.</p>

					<div id="areas">
						<a href="./description/servidores">
							<div class="area" id="server">
								<span>SERVIDORES</span>
							</div>
						</a>

						<a href="./description/maestros">
							<div class="area" id="master">
								<span>MAESTROS</span>
							</div>
						</a>

						<a href="./description/musica">
							<div class="area" id="praise">
								<span>MUSICA</span>
							</div>
						</a>

						<a href="./description/danza">
							<div class="area" id="dance">
								<span>DANZA</span>
							</div>
						</a>

						<a href="./description/audiovisual">
							<div class="area" id="multimedia">
								<span>MULTIMEDIA</span>
							</div>
						</a>

						<a href="./description/otros">
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
							<img id="src-img-next" src="./static/img/invitado.jpg" alt="">
						</div>
						<div id="text-next">
							<span id="title-next-event">Escuela Dominical - Ap. Armando Ospino</span>
							<span id="date-next-event">JUL 28, 2019 - 8:00 a.m.</span>
						</div>
					</div>

					<div id="all-events">
						<i class="icon-chevron-left"></i>
						<div id="list-events">
							<div class="event">
								<img class="img-event" src="./static/img/inquebrantables.jpg" alt="">
								<span class="title-event">Servicio juvenil</span>
								<span class="date-event">AGO 04, 2019 - 6:45 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/provision.jpg" alt="">
								<span class="title-event">Retiro de provisión</span>
								<span class="date-event">AGO 11, 2019 - 5:00 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/lanzamiento.jpg" alt="">
								<span class="title-event">Lanzamiento</span>
								<span class="date-event">AGO 18 - 19, 2019</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/inquebrantables.jpg" alt="">
								<span class="title-event">Servicio juvenil</span>
								<span class="date-event">AGO 25, 2019 - 6:45 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/supercelulas.jpg" alt="">
								<span class="title-event">Super Celulas</span>
								<span class="date-event">AGO 26 - 31, 2019</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/inquebrantables.jpg" alt="">
								<span class="title-event">Servicio juvenil</span>
								<span class="date-event">SEP 8, 2019 - 6:45 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/mujeres.jpg" alt="">
								<span class="title-event">Servicio de mujeres</span>
								<span class="date-event">SEP 28, 2019 - 6:45 p.m.</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/encuentro.jpg" alt="">
								<span class="title-event">Encuentro</span>
								<span class="date-event">OCT 12 - 14, 2019</span>
							</div>

							<div class="event">
								<img class="img-event" src="./static/img/graduacion.jpg" alt="">
								<span class="title-event">Graduacion de academia de lideres</span>
								<span class="date-event">OCT 27, 2019</span>
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
						<h3>Hecho con amor por</h3>
						<svg width="266" height="35" viewBox="0 0 266 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M41.0415 31.2114C41.0415 31.5122 40.9824 31.7915 40.8643 32.0493C40.7568 32.3071 40.6064 32.5327 40.4131 32.7261C40.2305 32.9087 40.0103 33.0537 39.7524 33.1611C39.4946 33.2686 39.2207 33.3223 38.9307 33.3223C38.6729 33.3223 38.4097 33.2739 38.1411 33.1772C37.8833 33.0806 37.6523 32.9248 37.4482 32.71L22.1406 16.7256V33H17.9512V11.6821C17.9512 11.2524 18.0693 10.8657 18.3057 10.522C18.5527 10.1675 18.8643 9.9043 19.2402 9.73242C19.6377 9.57129 20.0459 9.53369 20.4648 9.61963C20.8838 9.69482 21.2437 9.88818 21.5444 10.1997L36.8521 26.168V9.89355H41.0415V31.2114ZM64.0674 21.3501C64.0674 21.9302 63.9653 22.5586 63.7612 23.2354C63.5571 23.9014 63.2241 24.5244 62.7622 25.1045C62.311 25.6738 61.7148 26.1519 60.9736 26.5386C60.2432 26.9253 59.3516 27.1187 58.2988 27.1187H50.7417V23.1387H58.2988C58.8682 23.1387 59.3086 22.9668 59.6201 22.623C59.9316 22.2686 60.0874 21.8335 60.0874 21.3179C60.0874 20.77 59.9102 20.3403 59.5557 20.0288C59.2119 19.7173 58.793 19.5615 58.2988 19.5615H50.7417C50.1724 19.5615 49.7319 19.7388 49.4204 20.0933C49.1089 20.437 48.9531 20.8667 48.9531 21.3823V27.2314C48.9531 27.79 49.125 28.2251 49.4688 28.5366C49.8232 28.8481 50.2583 29.0039 50.7739 29.0039H58.2988V33H50.7417C50.1616 33 49.5332 32.8979 48.8564 32.6938C48.1904 32.4897 47.5674 32.1621 46.9873 31.7109C46.418 31.249 45.9399 30.6528 45.5532 29.9224C45.1665 29.1812 44.9731 28.2842 44.9731 27.2314V21.3501C44.9731 20.77 45.0752 20.147 45.2793 19.481C45.4834 18.8042 45.811 18.1812 46.2622 17.6118C46.7241 17.0317 47.3203 16.5483 48.0508 16.1616C48.792 15.7749 49.689 15.5815 50.7417 15.5815H58.2988C58.8789 15.5815 59.502 15.6836 60.168 15.8877C60.8447 16.0918 61.4678 16.4248 62.0371 16.8867C62.6172 17.3379 63.1006 17.9341 63.4873 18.6753C63.874 19.4058 64.0674 20.2974 64.0674 21.3501ZM86.1104 15.5815L78.5854 23.7993L87.061 33H81.2925L75.7173 26.9253L70.1421 33H64.3574L72.8169 23.7671L65.3242 15.5815H71.0605L75.6851 20.625L80.3418 15.5815H86.1104ZM175.781 9.89355L171.914 31.5498C171.828 31.9795 171.634 32.3501 171.333 32.6616C171.033 32.9731 170.667 33.1719 170.238 33.2578C169.797 33.333 169.378 33.2847 168.981 33.1128C168.594 32.9409 168.288 32.6724 168.062 32.3071L160.393 19.7065L152.707 32.3071C152.524 32.6187 152.271 32.8604 151.949 33.0322C151.638 33.2041 151.299 33.29 150.934 33.29C150.429 33.29 149.983 33.1289 149.597 32.8066C149.21 32.4844 148.974 32.0654 148.888 31.5498L144.988 9.89355H149.242L152.014 25.1528L158.62 14.6147C158.803 14.3032 159.05 14.0615 159.361 13.8896C159.684 13.7178 160.027 13.6318 160.393 13.6318C160.758 13.6318 161.096 13.7178 161.408 13.8896C161.719 14.0615 161.977 14.3032 162.181 14.6147L168.755 25.1528L171.527 9.89355H175.781ZM197.405 27.1187C197.405 27.8384 197.313 28.4883 197.131 29.0684C196.948 29.6377 196.707 30.1426 196.406 30.583C196.105 31.0127 195.756 31.3833 195.358 31.6948C194.961 31.9956 194.542 32.2427 194.102 32.436C193.672 32.6294 193.231 32.7744 192.78 32.8711C192.34 32.957 191.921 33 191.523 33H183.966C183.386 33 182.752 32.8979 182.065 32.6938C181.377 32.4897 180.738 32.1567 180.147 31.6948C179.567 31.2222 179.079 30.6152 178.681 29.874C178.294 29.1221 178.101 28.2036 178.101 27.1187V21.4468C178.101 20.3726 178.294 19.4648 178.681 18.7236C179.079 17.9717 179.567 17.3647 180.147 16.9028C180.738 16.4302 181.377 16.0918 182.065 15.8877C182.752 15.6836 183.386 15.5815 183.966 15.5815H191.523C192.598 15.5815 193.511 15.7749 194.263 16.1616C195.015 16.5483 195.622 17.0371 196.083 17.6279C196.545 18.208 196.878 18.8418 197.083 19.5293C197.297 20.2168 197.405 20.856 197.405 21.4468V27.1187ZM193.215 21.479C193.215 20.8989 193.07 20.4692 192.78 20.1899C192.49 19.9106 192.071 19.771 191.523 19.771H183.999C183.44 19.771 183.016 19.916 182.726 20.2061C182.436 20.4854 182.291 20.8989 182.291 21.4468V27.1187C182.291 27.6665 182.436 28.0854 182.726 28.3755C183.016 28.6655 183.44 28.8105 183.999 28.8105H191.523C192.093 28.8105 192.517 28.6655 192.796 28.3755C193.076 28.0854 193.215 27.6665 193.215 27.1187V21.479ZM216.225 19.771H206.799C206.229 19.771 205.8 19.916 205.51 20.2061C205.22 20.4854 205.075 20.8989 205.075 21.4468V33H200.885V21.4468C200.885 20.7271 200.977 20.0825 201.159 19.5132C201.342 18.9438 201.583 18.4443 201.884 18.0146C202.196 17.5742 202.55 17.2036 202.948 16.9028C203.345 16.5913 203.759 16.3389 204.188 16.1455C204.629 15.9521 205.069 15.8125 205.51 15.7266C205.961 15.6299 206.38 15.5815 206.767 15.5815H216.225V19.771ZM226.65 33H224.781C224.18 33 223.535 32.8979 222.848 32.6938C222.171 32.4897 221.537 32.1567 220.946 31.6948C220.355 31.2222 219.867 30.6152 219.48 29.874C219.093 29.1221 218.9 28.2036 218.9 27.1187V8.21777H223.089V27.1187C223.089 27.6343 223.25 28.0479 223.573 28.3594C223.895 28.6602 224.298 28.8105 224.781 28.8105H226.65V33ZM248.452 27.1187C248.452 27.8384 248.36 28.4883 248.178 29.0684C247.995 29.6377 247.753 30.1426 247.453 30.583C247.152 31.0127 246.803 31.3833 246.405 31.6948C246.008 31.9956 245.589 32.2427 245.148 32.436C244.719 32.6294 244.278 32.7744 243.827 32.8711C243.387 32.957 242.968 33 242.57 33H235.013C234.293 33 233.649 32.9087 233.08 32.7261C232.51 32.5435 232.005 32.3018 231.565 32.001C231.135 31.6895 230.765 31.335 230.453 30.9375C230.152 30.54 229.905 30.1265 229.712 29.6968C229.519 29.2563 229.374 28.8159 229.277 28.3755C229.191 27.9243 229.148 27.5054 229.148 27.1187V21.4468C229.148 20.3726 229.341 19.4648 229.728 18.7236C230.125 17.9717 230.614 17.3647 231.194 16.9028C231.785 16.4302 232.424 16.0918 233.112 15.8877C233.799 15.6836 234.433 15.5815 235.013 15.5815H242.57V19.771H235.045C234.487 19.771 234.062 19.916 233.772 20.2061C233.482 20.4854 233.337 20.8989 233.337 21.4468V27.0864C233.337 27.6558 233.477 28.0854 233.756 28.3755C234.046 28.6655 234.465 28.8105 235.013 28.8105H242.57C243.14 28.8105 243.564 28.6655 243.843 28.3755C244.123 28.0854 244.262 27.6665 244.262 27.1187V8.21777H248.452V27.1187Z" fill="white"/>
							<path d="M108.202 30.8892C108.202 31.1899 108.148 31.4692 108.041 31.7271C107.933 31.9849 107.783 32.2104 107.589 32.4038C107.407 32.5864 107.187 32.7314 106.929 32.8389C106.682 32.9463 106.413 33 106.123 33H96.6484C96.1328 33 95.5796 32.9409 94.9888 32.8228C94.4087 32.7046 93.834 32.5166 93.2646 32.2588C92.6953 31.9902 92.1421 31.6572 91.605 31.2598C91.0786 30.8516 90.6167 30.3628 90.2192 29.7935C89.8218 29.2134 89.4995 28.5474 89.2524 27.7954C89.0161 27.0435 88.8979 26.1948 88.8979 25.2495V15.5815H93.0874V25.2495C93.0874 25.7974 93.1787 26.2915 93.3613 26.7319C93.5547 27.1616 93.8125 27.5322 94.1348 27.8438C94.457 28.1553 94.833 28.397 95.2627 28.5688C95.7031 28.73 96.1758 28.8105 96.6807 28.8105H104.012V15.5815H108.202V30.8892ZM132.033 15.5815L124.508 23.7993L132.984 33H127.215L121.64 26.9253L116.065 33H110.28L118.74 23.7671L111.247 15.5815H116.983L121.608 20.625L126.265 15.5815H132.033Z" fill="#FF0062"/>
						</svg>
					</div>
				</div>
				<div id="fdown">
					<span>© 2019 Amor de Cristo</span> <span>Todos los derechos reservados</span>
				</div>
			</footer>
		</div>
	</body>
    <!--<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHG2NwzFqZSomVPd91nfkzod7hX0vazcg&callback=initMap">
    </script>
	<script>
		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 11.005379, lng: -74.248020},
				zoom: 17
			});
			var marker = new google.maps.Marker({
				position: {lat: 11.005379, lng: -74.248020},
				map: map,
				title: 'Iglesia Amor de Cristo'
				});
		}
	</script>-->
</html>
