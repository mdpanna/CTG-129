<?php
$name="Panna";
$gender="Female";
$mark=30;

if($mark >=80){
    if($gender=="Male"){
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, bro Congratulation! Let's go outside for party .</span>";
    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, apu Congratulation! Let's go outside for party and eat kachi.</span>";

    }
    
}elseif($mark >=70){
    if($gender=="Male"){
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, bro! where is the mishti?</span>";
    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, apu! where is the mishti?</span>";

    }
    
}elseif($mark >=60){
    if($gender=="Male"){
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, bro! let's eat fuska or morog polau.</span>";
    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, apu! let's eat fuska or morog polau.</span>";

    }
    
}else{
    if($gender=="Male"){
        echo "<span style='font-weight:600;font-family:Arial;color:red;'>$name, bro! ayta kono result hoilo. cholen ami apnare kachi khawai</span>";
    }else{
        echo "<span style='font-weight:600;font-family:Arial;color:red;'>$name, apu! ayta kono result hoilo. cholen ami apnare kachi khawai</span>";

    }

}


?>