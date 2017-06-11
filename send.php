<?php
	$destino = "nicolas.senn90@gmail.com";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$tel = $_POST["telefono"];
	$message = $_POST["message"];
	$contenido = "Nombre: " . $name . "\nEmail: " .$email . "\nTelefono: " . $telefono  . "\Mensaje: " . $message;
	mail($destino, "Contacto", $contenido);
	header("Location:index.html");
?>