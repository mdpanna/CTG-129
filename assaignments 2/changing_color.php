<?php

function changing_header_color($color){
    if($color=="LAL"){
        echo "<span style='font-weight:600;font-family:Arial;text-align:center; color:white;padding:20px;background:red;widht:100%;display:block'>LAL Color Header</span>";
    }elseif($color=="SOBUJ"){
        echo "<span style='font-weight:600;font-family:Arial;text-align:center; color:white;padding:20px;background:green;widht:100%;display:block'>SOBUJ Color Header</span>";
    }elseif($color=="NEEL"){
        echo "<span style='font-weight:600;font-family:Arial;text-align:center; color:white;padding:20px;background:blue;widht:100%;display:block'>NEEL Color Header</span>";
    }elseif($color=="HOLUD"){
        echo "<span style='font-weight:600;font-family:Arial;text-align:center; color:white;padding:20px;background:yellow;widht:100%;display:block'>HOLUD Color Header</span>";
    }elseif($color=="KALO"){
        echo "<span style='font-weight:600;font-family:Arial;text-align:center; color:white;padding:20px;background:black;widht:100%;display:block'>KALO Color Header</span>";
    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:red;'>$color, Alas! you field in exam.</span>";

    }
}

changing_header_color('LAL');
changing_header_color('SOBUJ');
changing_header_color('NEEL');
changing_header_color('HOLUD');
changing_header_color('KALO');

?>