<?php

// Utilizando un for​ imprimir los números del 1 al 100
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

foreach ($numbers as $value) {
    echo $value . '<br>';
    if($value === 5) {
        echo 'se encontro un ' . $value;
        break;
    }
}

