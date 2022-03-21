<?php

function calculoFah($temperatura){
   //(0 °C × 9/5) + 32 = 32 °F
   $tempFah = ($temperatura * 1.8) + 32;

   return $tempFah;

}


//user
if(isset($_REQUEST["txtCelsius"] )){
    $temperatura = $_REQUEST["txtCelsius"];
        
    if(empty($temperatura)){
        echo "<p>Temperatura não informado!</p>";
        return;
    }

    $result = calculoFah($temperatura);

}


/*function convCelsiusFahrenheit($celsius){   
    
    $fahrenheit =  ((9 * $celsius) / 5) + 32;
    
    return $fahrenheit;
}

function convFahrenheitCelsius($fahrenheit){   
    
    $celsius =  (($fahrenheit - 32) * 5) / 9;
    
    return  $celsius;
}


if(isset($_POST["txtTemperatura"])){
    $tempCelsius = $_POST["txtTemperatura"];   

    // USUÁRIO informado
    if(!empty($tempCelsius)){
       $tempFahrenheit = convCelsiusFahrenheit($tempCelsius);      
    }      
}
*/
?>






