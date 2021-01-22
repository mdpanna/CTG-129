<?php
echo "<div style='border:2px solid lightgray; padding:20px; margin-bottom:10px; width:300px; font-family:Arial'><h3>For Loop start with 3 and divide with 11</h3>";
for($i=3;$i < 25;$i++){
    echo $i."<br/>";
    if($i % 11==0){
        break;
    }
}
echo "</div>";

?>