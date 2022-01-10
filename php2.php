<?php

function evaluar($evaluarValor){


    if($evaluarValor%2==0){
    echo "El numero es par.";

    }else if(!is_numeric($evaluarValor)){
    echo "No es un valor numerico.";

    }else{
    echo "El numero es impar."; 
    }
}
evaluar(31);

echo "<br>";
echo "<hr>";

//ejercicio 2 niv 1

function contador($valorFinal){

    for($i=0; $i<=$valorFinal; $i+=2){
        echo "$i";
        echo ", ";
    }

}
contador(10);

echo "<br>";
echo "<hr>";

//ejercicio 3 niv 1

function contadorN($finalCuenta){

    for($i=0; $i<=$finalCuenta; $i++){

        echo "$i";
        echo ", ";
    }

}
contadorN(27);

echo "<br>";
echo "<hr>";

//ejercicio 4 niv 1

function contador2($valorFinal=10){

    for($i=0; $i<=$valorFinal; $i+=2){
        echo "$i";
        echo ", ";
    }

}
contador2();

echo "<br>";
echo "<hr>";

//ejercicio 5 niv 1

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

//ejercicio 6 niv 1

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

echo "<br/>";
echo "<hr/>";

//ejercicio 1 niv 2

function listaAnyos($anyoInicio, $anyoFin){
    for ($i=$anyoInicio; $i<=$anyoFin; $i+=4){
        echo $i."\n";

    }

}
echo listaAnyos(1960, 2016);

echo "<br/>";
echo "<hr/>";

//ejercicio 2 niv 2

function costeLlamada($tiempoLlamada){

    $maxTiempoStandard= 3;   
    $tarifaStandard= 0.10;
    $suplementoExtra= 0.05;

    if($tiempoLlamada==$maxTiempoStandard){
        $precioLlamada= $tarifaStandard*$tiempoLlamada;

    }else{
        $precioLlamada= ($tiempoLlamada*$tarifaStandard)+($suplementoExtra*($tiempoLlamada-$maxTiempoStandard));

    }
    echo $precioLlamada;
}

costeLlamada(5);

echo "<br/>";
echo "<hr/>";

//ejercicio 3 niv 2


function totCompra($unds_chocolate, $unds_chicle, $unds_caramelos){
   
    $total_importe= prod_chocolate($unds_chocolate)+prod_chicle($unds_chicle)+prod_caramelos($unds_caramelos);

    echo $total_importe;

}
function prod_chocolate($cant_chocolate){
    
    $precio_chocolate= 1;
    $item_1= $cant_chocolate*$precio_chocolate;
    return $item_1;

}
function prod_chicle($cant_chicle){

    $precio_chicle= 0.50;
    $item_2= $cant_chicle*$precio_chicle;
    return $item_2;

}
function prod_caramelos($cant_caramelos){

    $precio_caramelos= 1.50;
    $item_3= $cant_caramelos*$precio_caramelos;
    return $item_3;

}
echo totCompra(2, 4, 2);




?>
