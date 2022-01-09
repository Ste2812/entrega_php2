<?php

function evaluar(){

$evaluarValor=31;

    if($evaluarValor%2==0){
    echo "El numero es par.";

    }else if(!is_numeric($evaluarValor)){
    echo "No es un valor numerico.";

    }else{
    echo "El numero es impar."; 
    }
}
evaluar();

echo "<br>";
echo "<hr>";

//ejercicio 2

function contador($valorFinal){

    for($i=0; $i<=$valorFinal; $i+=2){
        echo "$i";
        echo ", ";
    }

}
contador(10);

echo "<br>";
echo "<hr>";

//ejercicio 3

function contadorN($finalCuenta){

    for($i=0; $i<=$finalCuenta; $i++){

        echo "$i";
        echo ", ";
    }

}
contadorN(27);

echo "<br>";
echo "<hr>";

//ejercicio 4

function contador2($valorFinal=10){

    for($i=0; $i<=$valorFinal; $i+=2){
        echo "$i";
        echo ", ";
    }

}
contador2();

echo "<br>";
echo "<hr>";

//ejercicio 5

function gradoNota($nota){
    if($nota<33){
        echo "El estudiante tendrá que repetir <br>";
    }else if($nota<45){
        echo "Grado de tercera división <br>";

    }else if($nota<=59){
        echo "Grado de segunda división <br>";

    }else{
        echo "Grado de primera división <br>";
    }

}
gradoNota(60);

echo "<br>";
echo "<hr>";

//ejercicio 6

function isBitten (){

    $bit=false;
    
    if (rand(0, 100)<=50){
        $bit=true;
        echo "Ha mordido.";

    }else{
    
        echo "no ha mordido.";
    }
    return $bit;

    

}
isBitten();


?>
