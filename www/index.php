<?php
	$votosa= 0;
	$votosb=0;
	$votostotal=0;
	$conexion=mysqli_connect("localhost", "root", "");
	$db=mysqli_select_db($conexion, "ricurasproyect");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ricuras</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="estilos/main.css">
	<link rel="stylesheet" href="estilos/nav-2.css">
	<link rel="stylesheet" href="estilos/fomulario.css">
	<link rel="stylesheet" href="estilos/encuesta.css">
	<link rel="stylesheet" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script src="engine1/jquery.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/formulario.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/border.js"></script>
	<script src="js/arriba.js"></script>
	<link rel="stylesheet" href="estilos/responsive.css">
</head>
<body style="background-image: url(img/fondo.jpg);">
	<div class="contenedor">
		<div class="contenido">
			<a name="inicio"></a>
			<header>
				<div class="header">
					<div id="wowslider-container1">
					<div class="ws_images"><ul>
						<li><img src="img/header1.jpg" alt="" title="" id="wows1_0"/></li>
						<li><img src="img/header2.jpg" alt="" title="" id="wows1_1"/></li>
						<li><img src="img/header3.jpg" alt="slider jquery" title="" id="wows1_2"/></li>
						<li><img src="img/header4.jpg" alt="" title="" id="wows1_3"/></li>
					</ul></div>
					<div class="ws_bullets"><div>
						<a href="#" title=""><span><img src="data1/tooltips/header.jpg" alt=""/>1</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/header2.jpg" alt=""/>2</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/header3.jpg" alt=""/>3</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/header4.jpg" alt=""/>4</span></a>
					</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider bootstrap</a> by WOWSlider.com v8.2</div>
					<div class="ws_shadow"></div>
					</div>	
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
					<script src="js/menu-movil.js"></script>
				</div>
			</header>
			<nav class="nav">
				<div class="nav-1">
					<ul>
						<li><a class="border-edit1" href="#inicio">INICIO</a></li>
						<li><a class="border-edit2" href="#productos">PRODUCTOS</a></li>
						<li><a class="border-edit3" href="#servicios">PAGO</a></li>
						<li><a class="border-edit4" href="#ubicacion">UBICACIÓN</a></li>
						<li><a class="border-edit5" href="#consultas">CONSULTA</a></li>
						<li><a class="border-edit6" href="#encuesta">ENCUESTA</a></li>
					</ul>
				</div>
			</nav>
			<nav class="nav header-nav">
				<div class="menu_bar">
					<a class="bt-menu"><span class="icon-menu"></span>Menú</a>
				</div>
				<div class="nav-2">
					<ul>
						<li><a class="border-edit1 correr" href="#inicio">INICIO</a></li>
						<li><a class="border-edit2 correr" href="#productos">PRODUCTOS</a></li>
						<li><a class="border-edit3 correr" href="#servicios">PAGO</a></li>
						<li><a class="border-edit4 correr" href="#ubicacion">UBICACIÓN</a></li>
						<li><a class="border-edit5 correr" href="#consultas">CONSULTA</a></li>
						<li><a class="border-edit6 correr" href="#encuesta">ENCUESTA</a></li>
					</ul>
				</div>
			</nav>
			<section>
				<br><br>
				<h1>Ricuras</h1>
				<br>
				<article>
					<h2>¿Quiénes somos?</h2>
					<br>
					<p align="center">Somos una empresa lider en Pasteleria, Reposteria y Panaderia. Contamos con servicios de catering adaptandonos a cada necesidad del solicitante, tambien disponemos de locales a la calle como servicio de delivery para aquellos que no tengan acceso a retirar. Nuestros Cocineros son seleccionados desde el IAG (Instituto Argentino de Gastronomía) por lo que podra contar con satisfacción garantizada, Además nuestro servicio de Delivery se encuentra disponible las 24hs para así, poder reservar su pedido y tenerlo en distintos tipos de eventos como Fiestas sorpresas, de cumpleaños, Casamiento, Bautismos, etc.</p>
				</article>
				<br><a name="productos" id="productos"></a><br><hr><br><br>
				<article>
					<h2>Nuestros productos</h2>
					<br>
					<p align="center">Contamos con una gran variedad de productos, en los cuales podemos ofrecerte:</p>
					<div class="productos-arreglo">
						<ul>
							<div class="prod-1" style="float: left;">
								<li>Panadería:</li>
								<?php
									$panaderia=array ('Pan miñon', 'Pan baguette', 'Pan negro', 'Pan de salvado', 'Pan integral', 'Panes saborizados', 'Masas finas', 'Etc');
									$cont=count($panaderia);
									echo "<ul>";
									for($a=0 ; $a<$cont ; $a++){
										echo "<li class='espacio'>".$panaderia[$a]."</li>";
									}
									echo "</ul>";
								?>
							</div>
							<div class="prod-2" style="float: right;">
								<li>Pastelería:</li>
								<?php
									$pasteleria=array ('Tortas', 'Cheescakes', 'Mousses', 'Tortas Pie', 'Bombones', 'Chocolates', 'Muffins', 'Facturas', 'Etc');
									$cont=count($pasteleria);
									echo "<ul>";
									for($a=0 ; $a<$cont ; $a++){
										echo "<li class='espacio'>".$pasteleria[$a]."</li>";
									}
									echo "</ul>";
								?>
							</div>
						</ul>
					</div>
					<br style="clear: both;"><br><br>
					<p align="center" style="margin: 0% 10%;">Contamos con nuevos productos pero todavía se encuentran en su fase de prueba, ofrecemos a los clientes la posibilidad de digustarlos en nuestro local y asi poder brindar una sugerencia en un voto positivo o negativo. Si le interesaría saber cuales son los nuevos producos y ayudarnos con la causa al final de la pagina se encuentra la votación. Desde ya, muchas gracias.</p>
				</article>
				<a name="servicios" id="servicios"></a>
				<br style="clear: both;"><br><hr><br><br>
				<article>
					<h2>Pago:</h2>
					<br>
					<p style="width: 80%; margin: 0 auto;">Contamos con distintos tipos de servicios tanto de catering para distintos tipos de eventos, tambien contamos con Servicio de Delivery para poder tener tu pedido a cualquier hora (Con reserva previa).
					Nuestros medios de pagos son:</p>
					<div class="lista-pago">
						<ul>
							<li>Efectivo</li>
							<li>Tarjetas h/6 Cuotas (Consultar recargo)</li>
								<ul>
									<li class="espacio">Débito</li>
									<li class="espacio">Crédito</li>
								</ul>
							<li>MercadoPago</li>
							<li>Transferencia bancaria</li>
							<a name="ubicacion"></a>
						</ul>
					</div>
				</article>
				<br><br><hr><br><br>
				<article>
					<h2>Ubicación</h2>
					<br>
					<p align="center" style="width: 80%;margin: 0 auto;">Nos encontramos en Ingeniero Marconi 768, Nuestro horario de atención personal y telefónica es de 8:30 a 22:30 hs.</p>
					<br>
					<div class="mapa">
						<p align="center" class="ubicacion"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26251.053942834067!2d-58.35938209226074!3d-34.67031368260723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35e88ee685a84dd5!2zRUVTVCBOwrA3IC0gSm9zw6kgSGVybsOhbmRleg!5e0!3m2!1ses-419!2sar!4v1508444681906" frameborder="0" style="border:0" allowfullscreen></iframe></p>
					</div>
					<br>
					<p align="center">Contamos con líneas rotativas</p>
					<br>
					<div align="center">
						<ul style="list-style: none;">
							<li>Tel.: 4573-2145</li>
							<li>Wsp.: 11-4587-1459</li>
							<a name="consultas"></a>
							<li>Fax: *458-574</li>
						</ul>
					</div>
				</article>
				<article class="arreglo-opc">
					<div class="rrss-opc">
						<ul>
							<li><a href="https://www.facebook.com/pg/ricuras1820/posts/?ref=page_internal" class="icon-facebook" target="_blank"></a></li>
							<li class="abajo-opc-a"><a href="https://www.instagram.com/ricuras1820_ok/" class="icon-instagram" target="_blank"></a></li>
							<li class="abajo-opc"><a href="https://twitter.com/ricuras1820_ok?lang=es" class="icon-twitter" target="_blank"></a></li>
							<li class="abajo-opc abajo-opc-b"><a href="https://plus.google.com/u/0/102796388220131437959" class="icon-google-plus" target="_blank"></a></li>
						</ul>
					</div>
				</article>
				<br><br><hr><br><br>
				<div class="consulta" align="center">
					<h2>Consulta</h2>
					<br>
					<form action="index.php" class="formulario" name="formulario_registro" method="POST">
						<div>
							<div class="text-group">
								<input id="nombre" type="text" name="nomyape" required="required">
								<label class="label" for="nombre">Nombre/s y Apellido/s:</label>
							</div>
							<div class="text-group ocultar">
								<input id="not-email" type="email" name="not-email">
								<label class="label" for="not-email">E-mail:</label>
							</div>
							<div class="text-group">
								<input id="email" type="email" name="email" required="">
								<label class="label" for="email">E-mail:</label>
							</div>
							<div class="text-group">
								<textarea id="consulta" name="consulta" rows="2" cols="45" required="required"></textarea>
								<label class="label" for="consulta">Consulta:</label>
							</div>
							<input type="submit" name="enviar" value="Enviar" class="boton centrar" style="margin-left: 18%;">
						</div>
					</form>
				</div>
				<br><br><a name="encuesta"></a><hr><br>
				<div class="main">
					<br>
					<h2>Encuesta</h2>
					<article>
						<?php
							if(isset($_REQUEST['enviar-encuesta'])){
								echo "<p align='center' style='margin: 0% 7%;'>En la seccion de abajo se encuentran nuestros nuevos productos, al clickear mostrará una breve descripción del producto.</p>";
								$arreglo1=false;
							}
							else {
								echo "<p align='center' style='margin: 0% 7%;'>En la seccion de abajo se encuentran nuestros nuevos productos, al clickear mostrará una breve descripción del producto. Elija una de las dos opciones y pulse Enviar</p>";
							}
						?>
					</article>
					<article class="tarjetas">
						<div class="contenedor_tarjeta">
							<figure>
								<img src="img/tarjeta1.jpg" alt="" class="adelante">
								<figcaption class="atras">
									<h2>Brownie de Limón</h2>
									<hr>
									<p>Los ingredientes son: Harina, Azúcar, Sal, Mantequilla, Huevos, Ralladura y Zumo de Limón</p>
									<p>Y el glaceado esta compuesto de: Zumo y Ralladura limón, Azúcar glas</p>
								</figcaption>
							</figure>
						</div>
						<div class="contenedor_tarjeta">
							<figure>
								<img src="img/tarjeta2.jpg" alt="" class="adelante">
								<figcaption class="atras">
									<h2>Brownie de Oreo</h2>
									<hr>
									<p>El brownie consta de: Huevos, Yemas de huevo, Mantequilla, Chocolate para postres, Azúcar Moreno, Galletas Oreo, Extracto de vainilla, Harina, Cacao en polvo, Sal</p>
								</figcaption>
							</figure>
						</div>
					</article>
					<article class="form_encuesta">
						<?php
							if(isset($_REQUEST['enviar-encuesta'])){
								echo "<script src='js/alerta2.js'></script>";
								echo "<br>";
								echo "<p align='center'>Voto Enviado</p>";
								echo "<p align='center'>Gracias por su colaboración.</p>";
							}
							else {
								echo "<form action='index.php' class='formulario' method='POST'>";
								echo "<div class='radio'>";
								echo "<input id='opca' type='radio' name='opc' value='1' required='required'><label for='opca' style='margin-right: 8%;'>Brownie de Limon</label>";
								echo "<input id='opcb' type='radio' name='opc' value='2'><label for='opcb' style='margin-left: 2%;'>Brownie de Oreo</label>";
								echo "</div>";
								echo "<br>";
								echo "<input type='submit' name='enviar-encuesta' value='Enviar' class='boton' style='margin: 0 auto;'>";
								echo "</form>";
							}
						?>
					</article>
					<?php
					if(isset($_REQUEST['enviar-encuesta'])){
						$sql="INSERT INTO resultados (voto) values ('".$_REQUEST['opc']."')";
						mysqli_query($conexion, $sql);
					}
					$sql="SELECT voto FROM resultados";
					$listado=mysqli_query($conexion, $sql);
					if(mysqli_num_rows($listado)>0){
						while ($registro=mysqli_fetch_assoc($listado)){
							if ($registro['voto']==1){ $votosa=$votosa+1; }
							else{ $votosb=$votosb+1; }
							$votostotal=$votosa+$votosb;
						}
					}
					$votosa=($votosa*100)/$votostotal;
					$votosa=(round($votosa*100))/100;
					$votosb=($votosb*100)/$votostotal;
					$votosb=(round($votosb*100))/100;
					echo "<div class='votos'>";
						echo "<ul>";
							echo "<li class='p'>";
								echo "<p>Votos:</p>";
								echo "Total: ".$votostotal;
							echo "</li>";
							echo "<li class='rotar'>";
								echo "<h4>Brownie</h4>";
								echo "<h4>de</h4>";
								echo "<h4>Limon</h4>";
								echo "<hr>";
									echo $votosa."%";
							echo "</li>";
							echo "<li class='rotar'>";
								echo "<h4>Brownie</h4>";
								echo "<h4>de</h4>";
								echo "<h4>Oreo</h4>";
								echo "<hr>";
									echo $votosb."%";
							echo "</li>";
						echo "</ul>";
					echo "</div>";
					echo "<article class='votos-opc'>";
						echo "<table>";
							echo "<tr>";
								echo "<td><h3 style='margin: 0 50%;'>Resultados</h3></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>Producto</b></td>";
								echo "<td><b>Votos (".$votostotal.")</b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Brownie de Limón</td>";
								echo "<td>".$votosa."%</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Brownie de Oreo</td>";
								echo "<td>".$votosb."%</td>";
							echo "</tr>";
						echo "</table>";
					echo "</article>";
					?>
					<br style="clear: both;">
				</div>
			</section>
			<footer>
				<div class="footer">
					<h4>by Fernando Maldonado™</h4>
					<div style="text-align: center; margin-top: 5px;" align="center">
						<a href="https://www.facebook.com/fernando.maldonado.1999" target="_blank"><img src="img/fb.png" class="foot"></a>
						<a href="https://www.instagram.com/fernandomaldonado__/?hl=es" target="_blank"><img src="img/igg.png" class="foot2"></a>
						<a href="https://twitter.com/?lang=es" target="_blank"><img src="img/tw.png" class="foot"></a>
					</div>
					<p style="font-size: 13px; margin-top: 2px;" align="center">Copyright © 2017 | Todos los derechos reservados ®</p>
				</div>
			</footer>
		</div>
	</div>
	<div class="rrss">
		<ul>
			<li><a href="#"><img src="img/logo.png" class="logo"></a></li>
			<li><a href="https://www.facebook.com/pg/ricuras1820/posts/?ref=page_internal" class="icon-facebook style" target="_blank"></a></li>
			<li><a href="https://www.instagram.com/ricuras1820_ok/" class="icon-instagram style" target="_blank"></a></li>
			<li><a href="https://twitter.com/ricuras1820_ok?lang=es" class="icon-twitter style" target="_blank"></a></li>
			<li><a href="https://plus.google.com/u/0/102796388220131437959" class="icon-google-plus style" target="_blank"></a></li>
		</ul>
	</div>
	<span class="ir-arriba icon-arrow-up2"></span>
</body>
</html>
<?php
	if (isset($_REQUEST['enviar'])) {
		echo "<script src='js/alerta.js'></script>";
		$mail = $_REQUEST['email'];
		$asunto = $_REQUEST['nomyape'];
		$mensaje = "E-Mail: ".$mail."\n\nMensaje:\n".$_REQUEST['consulta'];
		mail("maldonadofernando999@gmail.com", $asunto, $mensaje);
	}
	$db=mysqli_select_db($conexion, "ricurasproyect");
?>