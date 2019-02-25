<?php 

$nombrededepart = 0;
$deuxiemenombre = 1;
$limite = 30;
$array = array();



function SuiteFibonnaci($nombrededepart, $deuxiemenombre, $limite){
   
    for($i=0; $i < $limite; $i++ ){
       
        if ($i == 0){
            
            $array[$i] = $nombrededepart;
            $array[$i+1] = $deuxiemenombre;
        }
       
        $array[$i+2] = $array[$i] + $array[$i+1];
        
        yield $array[$i] . " --//--";
    }
}

foreach(SuiteFibonnaci(0,1,30) as $value) {
    echo $value;
}
