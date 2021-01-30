<?php

function age_defination($age,$name){
    if($age < 18){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>$name You are now too young to work anything.</span>";
    }elseif($age < 30){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>$name Your should have get married with someone. Your age is perfect for it.</span>";
    }elseif($age < 50){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>Oh!$name You are getting old now. You should go for gym.</span>";

    }elseif($age < 60){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>$name How many grandchildren you have, Grandfather?</span>";

    }elseif($age < 80){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>Ohho!$name You are looking old.</span>";

    }elseif($age < 100){
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>$name I think you are the only one in this earth with your age. LOL</span>";

    }else{
        echo "<span style='color:gray:font-weight:600;font-family:Arial;'>$name You are child now. Go play at home.</span>";

    }
}


age_defination(45,'Rana');
?>