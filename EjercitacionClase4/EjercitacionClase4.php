<?php 

include "incluir.php";


// 1. Generar un archivo llamado funciones.php :
// a. Definir una función mayor() que reciba 3 números y devuelva el mayor.
// b. Definir una función tabla() que reciba un parámetro base, un parámetro
// límite, y devuelve un array con la secuencia de números desde el numero
// base hasta el numero limite.
// c. Definir una variable llamada numeroMagico, que contenga un número, dicha
// variable deberá estar en la 1er línea de nuestro código PHP.
// d. Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos
// números con numeroMagico.
// e. Modificar tabla para que si recibe un sólo parámetro utilice numeroMagico
// como límite

$numeroMagico = 25;

function mayor($n1, $n2, $n3 = 25) {
	if($n1 >= $n2 && $n1 >= $n3) {
		return $n1;
	} else if ($n2 >= $n1 && $n2 >= $n3) {
		return $n2;
	} else if ($n3 >= $n1 && $n3 >= $n2) {
		return $n3;
	}
} 

$resultado = mayor(2,1,1);
echo $resultado;

echo '<br>';

function tabla($base, $limite = '') {
	global $numeroMagico;
	if($limite == false){
		$limite = $numeroMagico;
	}
	$secNum = range($base, $limite);
	return $secNum;
};


$resultadoArray = tabla(10);
var_dump($resultadoArray);

echo '<br>';



// 2. Generar un archivo llamado superficie.php :
// a. Definir una función triangulo() que retorne su superficie.
// b. Definir una función rectangulo() que retorne su superficie.
// c. Definir una función cuadrado() que retorne su superficie.
// d. Utilizando la función pi() , definir una función circulo() que retorne su
// superficie.


function triangulo ($base, $altura){

	$superficie = (($base * $altura) / 2);
	return $superficie;
}

$trianguloSup = triangulo(5, 8);
echo $trianguloSup;


echo '<br>';
function rectangulo ($base, $altura){

	$superficie = ($base * $altura);
	return $superficie;
}

$rectanguloSup = rectangulo(5, 8);
echo $rectanguloSup;

echo '<br>';

function cuadrado ($base, $altura){

	if($base === $altura) {
		$superficie = ($base * $altura);
		return $superficie;
	} else {
		return "La base y altura son distintas utilice la funcion rectangulo";
	}
	
}



$cuadradoSup = cuadrado(5, 5);
echo $cuadradoSup;

echo '<br>';

function circulo ($radio){

	$superficie = (pi()*$radio*$radio);
	return $superficie;
}

$circuloSup = circulo(8);
echo $circuloSup;


// 3. Generar un archivo llamado incluir.php que retorne un echo con el siguiente string
// “Soy incluir.php”.
// a. Incluir en el archivo, saludo.php . ¿Qué sucede?
// b. Reemplazar include por require . ¿Qué sucede?
// c. Generar en la misma carpeta un archivo saludo.php que solamente haga
// echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b ?
// d. En el archivo incluir.php reemplazar el require por include , e incluir 3 veces
// el mismo archivo. ¿Qué sucede?
// e. En el archivo incluir.php reemplazar todos los include por include_once .
// ¿Qué sucede?


// Crear un archivo todoJunto.php que incluya el archivo funciones.php y
// superficie.php en donde se definirá una función que reciba los radios de 3 círculos
// y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las
// funciones ya definidas.

// Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas =
// 0. Luego, modificar cada función de funciones.php y superficie.php para que al
// comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver
// cuanto vale $funcionesEjecutadas en cada momento. ¿Esto esta permitido? ¿Qué
// sucede?