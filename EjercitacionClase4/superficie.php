<?php 
include_once "funciones.php";
include_once "todoJunto.php";

function radioCirculos($radio, $radio2, $radio3) {
	$radio = circulo($radio);
	$radio2 = circulo($radio2);
	$radio3 = circulo($radio3);

	return mayor($radio, $radio2, $radio3);
}


 ?>