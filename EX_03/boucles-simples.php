<?php
    $maximum=10;
    $i=1;

    function compter($maximum, $i){
        while($i<=$maximum)
        {
            echo "<br>$i</br>";
            $i=$i+1;
        }
        return;
    }
    function compter_for($maximum, $i){
        for($i; $i<=10;)
        {
            echo "<br>$i</br>";
            $i=$i+1;
        }
    }
    
    compter($maximum, $i);
    compter_for($maximum, $i);
?>