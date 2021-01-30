<?php

function get_gpa_result($mark,$name){
    if($mark >=80){
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get Golden A+ means GPA:5.00 .</span>";
    }elseif($mark >=70){
       echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get A means GPA:4.00</span>";

    }elseif($mark >=60){
       echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get A-means GPA:3.5</span>";

    }elseif($mark >=50){
       echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get B means GPA:3.00</span>";

    }elseif($mark >=40){
       echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get C means GPA:2.00</span>";

    }elseif($mark >=33){
       echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! you get D means GPA:1.00</span>";

    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:red;'>$name, Alas! you field in exam.</span>";

    }
}

get_gpa_result(50,'Panna');

?>