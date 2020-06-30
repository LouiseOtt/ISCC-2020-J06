<?php
    $i=1;
    $maximum=100;
    
    function compter_dizaine($maximum, $i){
        
        while($i<=$maximum){
        
            if(($i % 10)==0)
            {
                echo "<br>$i</br>";
                echo "<br>Ceci est une dizaine</br>";
            }
            if(($i % 100)==0)
            {
                echo "<br>Ceci est une centaine</br>";
                $i++;
            }
            else{
                echo "<br>$i</br>";
                $i++;
            }
        }
    }
    compter_dizaine($maximum, $i);
?>