<?php
require_once("./php/myDBC.php");
if(isset($_SESSIONES['session']))
{
	header("location:principal.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>SHOPTHEM</title>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="registrar">
          	<a href="./php/registro.php"</a>Registrar</a>
    </div> <!-- fin opcion-->
    
	<div id="envolturas">
		<div id="contenedores">
	
			<div id="cabeceras" >
				<img src="./css/images/ventajas-logosea.jpg">
			</div>
	
			<div id="cuerpos">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >Clientes:</label></p>
						<input name="cliente" type="text" id="cliente" placeholder="Ingresa cliente" autofocus="" required=""></p>
					
					<p><label>Contraseñas:</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">SHOPTHEM</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
