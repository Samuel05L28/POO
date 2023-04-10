<?php
 require_once("poo.php");

   $palabra = "samuel";
   $v1 = 2343;
   $v3 = 23.3;

    $variables = new Variable();
    $variables ->tipo_variable($v1,"$palabra",$v3);
    $variables->determinar_a($palabra);
    $variables->mostar_3($v1);

  
