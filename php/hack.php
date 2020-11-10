<?php

function encode($param){
    $paramencode = $param;
    $num = mt_rand(5,5);

    for ($i=0; $i <$num ; $i++) { 
        $paramencode = base64_encode($paramencode);
    }

    $primary_array = array('F','I','A','C','T','D','O','V','N','O','A','B');
    $paramencode = $paramencode."+".$primary_array[$num];
    $paramencode = base64_encode($paramencode);

    return $paramencode;
}
function decoded($str) 
{ 
    $alpha_array = 
    array('Y','D','U','R','P', 
    'S','B','M','A','T','H'); 
    $decoded = 
    base64_decode($str); 
    list($decoded,$letter) = 
    split("\+",$decoded); 
    for($i=0;$i<count($alpha_array);$i++) 
    { 
    if($alpha_array[$i] == $letter) 
    break; 
    } 
    for($j=1;$j<=$i;$j++) 
    { 
        $decoded = 
        base64_decode($decoded); 
    } 
    return $decoded; 
}
?>