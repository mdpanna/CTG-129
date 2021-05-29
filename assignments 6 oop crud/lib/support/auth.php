<?php

function imageupload($image,$folder='/', array $type=['jpg','png','jpeg','gif']){
    
    $image_name=$image['name'];        
    $file_type=$image['type'];        
    $tmp_name=$image['tmp_name'];        
    $size=$image['size'];  
    
    $error_msg='';
    
    
    $extention=explode('.',$image_name);
    $end=end($extention);
    $unique_name=md5(time().rand(1000,100000)).'.'.$end;


    move_uploaded_file($tmp_name,$folder.$unique_name);
    
    
    return[
        'unique_name'=>$unique_name
    ];
    


}

?>