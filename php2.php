<?php

$evaluarValor=31;

if($evaluarValor%2==0){
    echo "El numero es par.";

}else if(!is_numeric($evaluarValor)){
    echo "No es un valor numerico.";

}else{
    echo "El numero es impar."; 
}

echo "<br>";
echo "<hr>";
?>
