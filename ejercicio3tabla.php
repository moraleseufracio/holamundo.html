<?php
    
    function bucle($n){
    
        
    if ($n<1 or $n>10) {
        echo "no has escrito un nůmero entre el 1 y el 10.";
        }
        
    else {
    echo "Tabla del $n: ";
    $i=1;
    while ($i<=10) {
    echo "$n x $i = ".$n*$i."";
    $i++;
        }
        
    }
    }
    
bucle(1,9);
bucle(2,9);
bucle(3,9);
bucle(4,9);
bucle(5,9);
bucle(6,9);    
    ?>