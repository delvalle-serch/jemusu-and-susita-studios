<!-- RECOMIENDA MI CURSO TE LO AGRADECERIA MUCHISIMO -->
<!-- PROGRANDOM, no olvides suscribirte a mi canal -->
<?php 
	$base = new PDO('mysql:host=localhost; dbname=snk','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
?>