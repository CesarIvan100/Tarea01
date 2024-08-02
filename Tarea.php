<?php
// a. VARIABLES
$entero = 25;
$flotante = 3.14;
$cadena = "Hola Mundo";
$booleano = true;
$arreglo = array("manzana", "banana", "cereza", "durazno", "mango");

// b. OPERACIONES
$suma = $entero + $flotante;
$multiplicacion = $entero * 2;
    echo "Resultado de la suma: $suma<br>";
    echo "Resultado de la multiplicación: $multiplicacion<br>";

// c. CADENAS
$cadena2 = " ¿Cómo estás?";
$cadena_concatenada = $cadena . $cadena2;
$longitud_cadena = strlen($cadena_concatenada);
    echo "Cadena concatenada: $cadena_concatenada<br>";
    echo "Longitud de la cadena concatenada: $longitud_cadena<br>";

// d. CONDICIONALES
if ($booleano) {
    echo "El valor booleano es verdadero.<br>";
} else {
    echo "El valor booleano es falso.<br>";
}

// e. ARREGLOS
echo "Elemento seleccionado del arreglo: " . $arreglo[2] . "<br>";
?>
