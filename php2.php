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

?>
