<?php
function printArr($array){
    foreach($array as $value){
        echo("<p>$value</p>");
    }
}

function largest($array){
   $tmp = 0;
   foreach($array as $value){
       if($tmp < $value)
           $tmp = $value;
   }
    return $tmp;

}

?>