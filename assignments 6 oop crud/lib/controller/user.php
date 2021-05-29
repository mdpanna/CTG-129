<?php
class User extends Database{
    
    function insert_data($username,$name,$email,$number,$image){
        $upload_image=imageupload($image,'img/');
        $img_unique_name=$upload_image['unique_name'];
        parent::create("INSERT INTO user(username,name,email,number,image)VALUES('$username','$name','$email','$number','$img_unique_name')");

    }  
    
    function get_user($table,$order){
       
       return parent::selectAll($table,$order);

    }
    
    function selectwhere($table,$where,$data){
       
       return parent::selectbydata($table,$where,$data);

    }
    
    function delete_data($table,$where,$data){
       
       return parent::delete($table,$where,$data);

    } 
    function update_data($id,$username,$name,$image2,$image,$email,$number,$table){
        

        if(empty($image["error"] == 0)){

            parent::update("UPDATE user SET username='$username', name='$name', email='$email', number='$number',image='$image2' WHERE id='$id'");




        }else{
            $upload_image=imageupload($image,'img/');
            $img_unique_name=$upload_image['unique_name'];
            parent::update("UPDATE user SET username='$username', name='$name', email='$email', number='$number',image='$img_unique_name' WHERE id='$id'");




        }
        

    }
}