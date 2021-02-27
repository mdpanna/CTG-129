<?php
$file_error='';
if(isset($_POST['upload'])){
    
    $file_name=$_FILES['files']['name'];
    $file_tmp=$_FILES['files']['tmp_name'];
    $file_size=$_FILES['files']['size'];
    $file_size_kb=$file_size/1024;
    
  
    
    $file_exp=explode('.',$file_name);
    $file_ext=end($file_exp);
    
    $unique_name=time().rand();
    $new_name=md5($unique_name).'.'.$file_ext;
    $loc="img/";
    
    if(empty($file_name)){
        $file_error.="<span class='d-block mt-2 alert alert-danger'>File is empty <button class='close' data-dismiss='alert'>&times;</button></span>";

    }elseif(in_array($file_ext,['jpg','png','gif','jpeg'])===false){
        $file_error.="<span class='d-block mt-2 alert alert-danger'>File is not valid. Please check. <button class='close' data-dismiss='alert'>&times;</button></span>";

    }elseif($file_size_kb > 500){
        $file_error.="<span class='d-block mt-2 alert alert-danger'>File size is too big <button class='close' data-dismiss='alert'>&times;</button></span>";

    }else{
        move_uploaded_file($file_tmp,$loc.$new_name);
        $img= "<img src='img/".$new_name."' alt=''none' class='img-fluid' height='100px'>";
    }
    
    
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>

    <div class="container mt-3 ">
        <div class="row">
            <div class="col-6 m-auto w-100">

                <div class="card ">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h4 class="text-center">Form File Validate</h4>
                            
                            <?php echo $img; ?>
                            <div class="form-group">
                                <label>Enter File</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="files">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <?php echo $file_error; ?>

                            </div>

                            <div class="form-group">
                                <input type="submit" name="upload" class="btn btn-success w-100" value="Upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>
