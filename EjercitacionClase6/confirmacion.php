<?php 
// PROPERTY;
	// Ej. Muchas Gracias por registrarte
// NOMBRE COMPLETO, nos has dicho que tienes X años (mostrar edad).
// Hemos registrado tu email, (mostrar EMAIL). ¡Gracias!

	

	function redirect($url, $permanent = false) {
    	header("Location:" . $url, true, $permanent? 301 : 302);
    exit;
	};

	

	if ($_POST == NULL) {
		redirect('registro_usuarios.php');
	};

	// if(isset($_GET)){
	// 	redirect('registro_usuarios.php');
	// }

	echo "Muchas gracias por registrate " . $_POST['name'] . " " . $_POST['lastname'] . ", nos has dicho que tienes " . $_POST['edad'] . " años.<br>";
	echo "Hemos registrado su email: " . $_POST['email'] . ". ¡Gracias!";

	for ($i=0; $i < count($_POST['wdymu']) ; $i++) { 
		echo $_POST['wdymu'][$i];
	};

 ?>