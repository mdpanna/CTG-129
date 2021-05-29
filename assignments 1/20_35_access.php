<?php
$age=10;
$name="Panna";
if($age >= 20 and $age <= 35){
    echo "<span style='font-weight:600;font-family:Arial;color:green;'>$name, Congratulation! Your are welcome here</span>";
}elseif($age < 20 and $age > 35){
    echo "<span style='font-weight:600;font-family:Arial;color:red;'>$name, Your are not welcome here.Get out</span>";

}else{
   echo "<span style='font-weight:600;font-family:Arial;color:red;'>$name, Your are not welcome here.Get out</span>";
 
}
?>