<?php 

function mayor($n1, $n2, $n3 = 25) {

	global $funcionesEjecutadas;
	
	$funcionesEjecutadas++;

	if($n1 >= $n2 && $n1 >= $n3) {
		return $n1;
	} else if ($n2 >= $n1 && $n2 >= $n3) {
		return $n2;
	} else if ($n3 >= $n1 && $n3 >= $n2) {
		return $n3;
	}
	
	
} 








function triangulo ($base, $altura){

	$superficie = (($base * $altura) / 2);
	return $superficie;
};



function rectangulo ($base, $altura){

	$superficie = ($base * $altura);
	return $superficie;
};


function cuadrado ($base, $altura){

	if($base === $altura) {
		$superficie = ($base * $altura);
		return $superficie;
	} else {
		return "La base y altura son distintas utilice la funcion rectangulo";
	}
	
};


function circulo ($radio){

	$superficie = (pi()*$radio*$radio);
	return $superficie;
};
