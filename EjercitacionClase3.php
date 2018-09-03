<?php

// // Utilizando un for​ imprimir los números del 1 al 100
echo 'For <br>';

for ($i=0; $i <= 100; $i++) { 
    echo $i . ' | ';
};

echo '<hr>';
// Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un número generado
// aleatoriamente entre 0 y 100.



for ($i=0, $j=rand(0,100); $i <=$j; $i++) { 
    echo $i . ' | ';
};

echo '<hr>';
//Mostrar la tabla de multiplicar del 2 utilizando un for

for ($i=2; $i <= 20 ; $i = $i + 2) { 
    echo $i . '<br>';
}

echo '<hr>';

// Utilizando un while​ haremos un programa que tiré una moneda (seleccionará un número al azar que
// puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuantos tiros de
// monedas llevó obtener 5 veces cara


$coin = 0;
$i = 0;

while ($coin < 5) {
    
    $numberA = rand(0,1);
    $coin = $coin + $numberA;
    echo $coin . '<br>';
    $i++;
}

echo 'ingreso ' . $i . ' veces al while';

echo '<hr>';

// Utilizando un do/while​ realizar un programa que tire la moneda hasta que se obtenga cara​ (el número 1).
// Al final del programa imprimir cuantos tiros de moneda llevó.

$j = 0;
do {
    $numberB = rand(0,1);
    $j++;
    echo $numberB;
    echo '<br>';
} while ($numberB !== 1);

echo '<br>';
echo 'ingreso ' . $j . ' veces al while';


echo '<hr>';
// Definir un array​ con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los
// nombres en pantalla.
// a. Resolver este problema con un for.​
// b. Resolver este problema con while​.
// c. Resolver este problema con un do/while​.

$names = ['Sergio', 'Pedro', 'Sebastian', 'Pablo', 'Maria'];

for ($i=0; $i < count($names); $i++) { 
    echo $names[$i] . '<br>';
}

echo '<br><br>';

$n = 0;
while ($n < count($names)) {
    echo $names[$n] . '<br>';
    $n++;
}

echo '<br><br>';

$k = 0;
do {
    echo $names[$k] . '<br>';
    $k++;
} while ($k < count($names));

echo '<hr>';

// 7. Definir un array​ con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los
// números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir
// “Se encontró un 5!”)
// a. Resolver este problema con un for.​
// b. Resolver este problema con un while​.
// c. Resolver este problema con un do/while​.

$numbers = [];

for ($i=0; $i < 10  ; $i++) { 
    $number = rand(1, 100); 
    $numbers[] = $number;
}


for ($j=0; $j < count($numbers) ; $j++) { 
    echo $numbers[$j] . '<br>';
    if($numbers[$j] === 5) {
        echo "se encontro un 5";
        break;
    };
}

echo "<hr>";

$k = 0;
while ($k < count($numbers)) {
    echo $numbers[$k] . '<br>';
    if($numbers[$k] === 5) {
        echo "se encontro un 5";
        break;
    };
    $k++;
}

echo "<hr>";

$j = 0;
do {
 echo $numbers[$j] . '<br>';
  if($numbers[$j] === 5) {
        echo "se encontro un 5";
        break;
    };
 $j++;
} while ($j < count($numbers));

echo "<hr>";

foreach ($numbers as $value) {
    echo $value . '<br>';
    if($value === 5) {
        echo 'se encontro un ' . $value;
        break;
    };
}

echo "<hr>";
// Utilizando la funcion “Range”( http://php.net/manual/en/function.range.php ) crear un rango de letras (de la
// a hasta la o), imprimir un valor que diga “En la posición [index] se encuentra el valor [value]” donde
// [value] se reemplazará por cada valor del array y [index] representa el índice.


$letters = range('a', 'o');

foreach ($letters as $key => $value) {
    echo 'En la posición ' . $key . " se encuentra el valor: " . $value;
    echo "<br>";
}

echo "<hr>";
// 9. Definir una variable $mascota que sea un array asociativo
// a. En el índice animal debe decir qué animal es.
// b. En el índice edad debe decir la edad.
// c. En el índice altura debe decir la altura .
// d. En el índice nombre debe decir el nombre

$mascotas = [
    'animal' => ['Gato'],
    'edad' => ['20'],
    'altura' => ['0.50'],
    'nombre' => ['Arty']
];

// Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
// animal: perro
// edad: 5
// altura: 0,60
// nombre: Sonic

foreach ($mascotas as $key => $value) {
    echo $key . " ";
    foreach ($value as $value2) {
        echo $value2 . "<br>";
    }
}

echo "<hr>";
// 11. Partiendo de un archivo con la siguente variable definida:
// $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
// "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
// "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
// "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
// "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
// "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
// "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
// Crear un script que muestre el nombre de la capital y el país desde la variable $ ceu .
// Opcional: Ordenar la lista por el nombre del país.
// Ejemplo de output:
// La capital de Holanda es Amsterdam.
// La capital de Grecia es Atenas.
// La capital de Alemania es Berlín.


$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

foreach ($ceu as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
echo "<hr>";
// 12. Partiendo de un archivo con la siguiente variable definida:
// $ceu = [
// "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
// "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
// "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
// "Francia" => ["Paris", "Nantes", "Lyon"],
// "Italia" => ["Roma", "Milan", "Venecia"],
// "Alemania" => ["Munich", "Berlin", "Frankfurt"]
// ];
// Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente
// formato:
// Las ciudades de Argentina son:
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// Las ciudades de Brasil son:
// ● Brasilia
// ● Rio de Janeiro
// ● Sao Pablo

$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", $esAmericano = true],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo",  $esAmericano = true],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla",  $esAmericano = true],
"Francia" => ["Paris", "Nantes", "Lyon",  $esAmericano = false],
"Italia" => ["Roma", "Milan", "Venecia",  $esAmericano = false],
"Alemania" => ["Munich", "Berlin", "Frankfurt",  $esAmericano = false]
];

foreach ($ceu as $key => $value) {

    if($value[3] === true) {
        echo "<br>";
        echo "Las ciudades de " . $key . " son: <br>";
        foreach ($value as $value) {
            if($value === true) {
                break;
            }
            echo $value . '<br>';
        }
    }
    
}



// 13. A partir del ejercicio anterior:
// Curso Desarrollo Web Full Stack
// Clase 03 (PHP)
// ● Agregarle a cada pais un dato extra además de sus ciudades llamado esAmericano . Este valor
// debe ser true o false.
// ● Hacer que la impresión anterior no muestre paises que no sean Americanos.