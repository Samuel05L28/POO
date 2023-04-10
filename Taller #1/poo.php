<?php
class Variable {

    private $v1="";
    private $texto="";
    private $v3="";
  
    
    function tipo_variable($v1,$texto,$v3){
        echo "Es una variable tipo " .  gettype($v1)  . "\n";
        echo "Es unq variable tipo " .  gettype($texto)  . "\n";
        echo "Es una variable tipo " .  gettype($v3) . "\n";
    }

    function determinar_a($texto){
        if(str_contains($texto , "a" )){
         echo "contiene la letra a \n";
         }
         else
         {
            echo "no contiene la a \n";

    }
}

function mostar_3($v1){
    if(str_contains($v1 , 3)){
        echo "contiene el numero 3 \n";
        }
        else
        {
           echo "no contiene el numero 3 \n";
   }
}
    
 
}
