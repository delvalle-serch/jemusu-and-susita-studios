<!DOCTYPE html>
<html>
<head>
	<title>Jemusu Studios</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>
	<header>
		<div class="contenedor">
			<nav><ul>
				<li><a href="/">JEMUSU STUDIOS</a></li>
				<li><a href="snkv">SNK VIDEOS</a></li>
				<li><a href="faq">PREGUNTAS</a></li>
				<li><a href="mas">MAS</a></li>

            </ul>

			</nav>
			<section>
				
          
          @yield('contenido')
          @yield('lista')
@yield('video')
     @yield('snk2')
          @yield('snk3')
@yield('snk4')
			</section>
		</div>
	</header>


<footer class="footer">
		<div class="container">
			<h5>Todos los derechos reservados wit studio, by Hajime isayama. developed:sergio del valle. Art by <span class="nm-footer">JEMUSU STUDIOS</span>.</h5>
		</div>
	</footer>

</body>
</html>