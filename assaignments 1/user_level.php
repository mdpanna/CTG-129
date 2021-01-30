<?php
$credit=1;
$user="Panna";
if($credit >= 5){
    echo "<span style='font-weight:600;font-family:Arial;color:green;'>$user,Your are the Boss.</span>";
}elseif($credit >= 4){
    echo "<span style='font-weight:600;font-family:Arial;color:red;'>$user, Your are Senior staff</span>";

}elseif($credit >= 3){
    echo "<span style='font-weight:600;font-family:Arial;color:gray;'>$user, Your are Assistant manager</span>";

}elseif($credit >= 2){
    echo "<span style='font-weight:600;font-family:Arial;color:pink;'>$user, Your are Juniar staff</span>";

}else{
   echo "<span style='font-weight:600;font-family:Arial;color:red;'>$user, Your are not a Member of this company.Get out</span>";
 
}
?>