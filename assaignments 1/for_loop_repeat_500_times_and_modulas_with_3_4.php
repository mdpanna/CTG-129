<?php
echo "<div style='border:2px solid lightgray; padding:20px; margin-bottom:10px; width:300px; font-family:Arial'><h3>For Loop repeat with 500 times and Modulus 3</h3>";
$count=501;
for($i=1;$i < $count;$i++){
    if($i % 3==0){
        echo "Number Modulas with 3 = ".$i.'<br>';
    }
  
}
echo "</div>";
echo "<div style='border:2px solid lightgray; padding:20px; margin-bottom:10px; width:300px; font-family:Arial'><h3>For Loop repeat with 500 times and Modulus 4</h3>";
$count=501;
for($i=1;$i < $count;$i++){
    
    if($i % 4==0){
        echo "Number Modulas with 4 = ".$i.'<br>';
    }
}
echo "</div>";

?>
