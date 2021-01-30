<?php

if(isset($_POST["insert"])) {

    $file_name = $_FILES['img_name']['name'];
    $file_size =$_FILES['img_name']['size'];
    $file_tmp =$_FILES['img_name']['tmp_name'];
    $file_type=$_FILES['img_name']['type'];
    
    
    list($width, $height) =getimagesize($file_tmp);



   echo "<table >
    <tr>
        <td>Name</td>
        <td>Height</td>
        <td>Width</td>
        <td>Size</td>
        <td>Type</td>
    </tr> <tr>
        <td>$file_name</td>
        <td>$height</td>
        <td>$width</td>
        <td>$file_size</td>
        <td>$file_type</td>
    </tr>
   </table>";
}
    
?>
<style type="text/css">
    table{        
        border: 1px solid black;
        margin-bottom: 10px;
    }
 
    td {
        border: 1px solid black;
        padding:10px;
    }

</style>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="img_name">
    <input type="submit" name="insert">
</form>
