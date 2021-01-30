<?php

function check_age($birthyear,$name){
    
    $a=$birthyear;
    $b=date('Y');
    $result=$b-$a;
    echo  "<span style='color:gray:font-weight:600;font-family:Arial;'>$name, Your age is $result years old.</span>";;
}


check_age(1975,'Panna');
?>