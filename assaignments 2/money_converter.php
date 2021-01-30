<?php

function money_converter($money){
    $usd= $money * 84.62;
    $cad= $money * 66.23;
    $pound= $money * 116.01;

    echo "<span style='font-weight:600;font-family:Arial;color:green;margin-bottom:10px;display:block;'> BD $money Taka to USD $usd$</span><br/>";
    echo "<span style='font-weight:600;font-family:Arial;color:red;margin-bottom:10px;display:block;'> BD $money Taka to CAD $cad$</span><br/>";
    echo "<span style='font-weight:600;font-family:Arial;color:gray;'> BD $money Taka to POUND $pound euro</span>";

}

money_converter(100);

?>