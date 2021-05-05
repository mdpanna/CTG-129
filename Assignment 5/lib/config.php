<?php

//$create_db="CREATE TABLE wd_crud(
//    id INT(11) NOT NULL AUTO_INCREMENT,
//    username VARCHAR(255) NOT NULL,
//    name VARCHAR(255) NOT NULL,
//    email VARCHAR(255) NOT NULL,
//    number VARCHAR(255) NOT NULL,
//    location VARCHAR(255) NOT NULL,
//    age VARCHAR(255) NOT NULL,
//    gender VARCHAR(255) NOT NULL,
//    image VARCHAR(255) NOT NULL,
//    dept VARCHAR(255) NOT NULL,
//    date_create timestamp NOT NULL DEFAULT current_timestamp(),
//    modified_date VARCHAR(255) NOT NULL,
//    PRIMARY KEY(id)
//)";
//$connection->query($create_db);

$host="localhost";
$user="root";
$password="";
$database="wd_crud";





function connection(){
    global $host,$user,$password,$database;
    $connection=new mysqli($host,$user,$password,$database);
    return $connection;
}


function validate_msg($msg,$type='danger'){
    $error="<p class='alert alert-$type'>$msg <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></p>";
    return $error;
    
}

function insert(){}

function selectAll($table,$type='DESC'){
    return connection()->query("SELECT * FROM $table ORDER BY id $type");
}

function selectwhere($table,$where,$value,$type='DESC'){
    if(empty($name)){
      return  connection()->query("SELECT * FROM $table WHERE $where='$value' ORDER BY id $type");

    }else{
      return  connection()->query("SELECT $name FROM $table WHERE $where='$value' ORDER BY id $type");

    }
    
}

function update(){}

function delete_data($table,$where,$value){
  return  connection()->query("DELETE FROM $table WHERE $where='$value'");

}

function imageupload($image,$folder='/', array $type=['jpg','png','jpeg','gif']){
    
    $image_name=$image['name'];        
    $file_type=$image['type'];        
    $tmp_name=$image['tmp_name'];        
    $size=$image['size'];  
    
    $error_msg='';
    
    
    $extention=explode('.',$image_name);
    $end=end($extention);
    $unique_name=md5(time().rand(1000,100000)).'.'.$end;

    if(in_array($end,$type)==false){
        $error_msg=validate_msg('Image is not valid');
    }else{
        move_uploaded_file($tmp_name,$folder.$unique_name);
    }
    
    
    return[
        'unique_name'=>$unique_name,
        'error_msg'=>$error_msg
    ];
    


}



?>