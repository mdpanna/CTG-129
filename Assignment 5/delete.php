<?php
require_once('lib/autoload.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $delete=delete_data('wd_crud','id',$id);
    
    if($delete){
        header('location:table.php');
    }else{
        echo $delete;
    }
}
?>