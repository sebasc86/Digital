<!-- Definir dos variable con números y compararlos con un if para decidir cuál número
es mayor e imprimir “El número mayor es N ” donde N sea el valor de la variable que
resultó ser mayor mayor.
a. Al ejercicio anterior agregar un else para cubrir el caso inverso. -->

<?php 
	
$a = 5;
$b = 6;

if ($a > $b) {
	echo 'El numero mayor es ' . $a; 
} else {
	echo 'El numero mayor es ' . $b;
};

echo "<hr>";
// Utilizando la función rand(x,y), donde “x” es el número mínimo e “y” el número máximo,
// generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y
// sólo si el número generado es 3 o 5.

$number1 = rand(1,5);
var_dump($number1);

if($number1 === 3 || $number1 === 5){
	echo "Hay concidencias";
} else {
	echo "No hay concidencias";
};

echo "<hr>";

// Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que
// sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número
// 3.

if($number1 !== 3){
	echo "el numero no es 3 es " . $number1;
} else {
	echo "el numero es 3";
};

echo "<hr>";
// Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea
// verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número es
// menor a 50”.

$number2 = rand(1,100);

if($number2 >= 50){
	echo "el numero es mayor a 50 es " . $number2;
} else {
	echo "el numero es menor a 50 es " . $number2;
};

echo "<hr>";
// Generar un número aleatorio entre 0 y 100. Si es mayor a 50 y par se imprimirá “El número
// pasa la condición”. De lo contrario se imprimirá “El número NO pasa la condición”
// a. Modificaremos al ejercicio anterior para que también pase la condición el número 0.

$number3 = rand(0,100);
$numberPair = $number3 % 2;

if($number3 > 50 && $numberPair === 0 || $number3 === 0) {
	echo "Eñ numero pasa la condición. " . "El numero es " . $number3;
} else {
	echo "El numero no pasa la condicion. " . "El numero es " . $number3;
};



echo "<hr>";
// <!-- Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede
// ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado
// se imprimirá el mensaje “Bienvenido”.
// a. Modificaremos al ejercicio anterior para que también imprima bienvenido si el sexo es
// “Otro” sin importar el resto de las condiciones. -->

$year = 20;
$married = true;
$sex = 'Otro';

if ($year > 18 && $married == false) {
	echo "Bienvenido";
} elseif ($sex === 'Otro') {
	echo "Bienvenido";
} else {
	echo "Ustede no puede ingresar";
};

echo "<hr>";
// Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego,
// escribir el siguiente código: (sin copiar y pegar!!)

// a. ¿Qué termina imprimiendo?
// b. Probar con los valores -100, -1, 0, 1 y 100 para cantidadDeAlumnos

$cantidadDeAlumnos = 100;

if ($cantidadDeAlumnos) {
	echo "true";
} else {
	echo "false";
}

echo "<hr>";
// Probar el siguiente código:

if ( $i = 0) {
echo 'true';
}
else {
echo 'false';
}

// que imprime? 

//Si modificamos el 1 por un 0, ¿Que imprime?

echo "<hr>";
// Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El
// número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operador ? )

$numeroI = 3;

echo $numeroI % 2 == 0 ? $numeroI : 'False';

echo "<hr>";
// Utilizando switch, generar un número al azar entre 1 y 5 en la variable “$i”. En cada caso
// imprimir “i es igual a X”.


$x = 0;
$i = rand(1,5);

switch ($i) {
	case 1:
		$x = 1;
		break;
	case 2:
		$x = 2;
		break;
	case 3:
		$x = 3;
		break;
	case 4:
		$x = 4;
		break;
	case 5:
		$x = 5;
		break;		
	default:
		$x = "No es ninguno de estos numeros.";
		break;
}


echo "i = ". $i . " que es igual a x = " . $x;

echo "<hr>";

// Utilizando el mismo switch dejaremos únicamente los casos del número 1 y 2, en el caso
// que sea otro número que se imprima “ NO es igual a 1 o 2”

$x = 0;
$i = rand(1,5);

switch ($i) {
	case 1:
		$x = 'el numero es ' . $i;
		break;
	case 2:
		$x = 'el numero es ' . $i;
		break;	
	default:
		$x = "No es igual a 1 o 2.";
		break;
};

echo $x;

echo "<hr>";
// Dado el siguiente ejemplo:

$a = 3;
$b = 2;

if ($a<=>$b) {
	echo "hola!";
};

// Definir en el principio del archivo $a y $b e ir alterando sus valores para ver que sucede.
echo "<hr>";

var_dump($a<=>$b);