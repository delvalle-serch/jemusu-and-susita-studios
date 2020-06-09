@extends('header')

@section('lista')
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>ver online</title>
		
<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
		
		<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="content">
					<div class="contenido clearfix">
					
<?php 
							try {
								include 'bin/core/conexion.php';

								$sql = "SELECT * FROM series";
								$resultado = $base->query($sql);
								$resultado->execute(array());
								if ($crow=$resultado->fetch(PDO::FETCH_ASSOC)) {
									echo"
									<h1>".$crow['StrNombre']."</h1>
									<p class='sinopsis text-justify'>".$crow['StrSinopsis']."</p>
									<div class='thumb pull-left'>
										<img src='".$crow['StrImagen']."'>
									</div>";
								}

							}catch(Exception $e){
								echo "Error en linea: " . $e->getMessage();
							}
						?>
							<a href="ver" class="btn btn-success">ver capitulos </a>
						
			</div>
				</div>
				
				</div>
			</div>
			<aside class="col-md-4">
				
					
			</aside>
		
	</div>
				
			
				
				
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	</html>	

			
	@endsection

