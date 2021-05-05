<?php
require_once('lib/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php
    

    if(isset($_POST['update'])){
        $id       =$_POST['id'];
        $name       =$_POST['name'];
        $email      =$_POST['email'];
        $number     =$_POST['number'];
        $username   =$_POST['username'];
        $location   =$_POST['location'];
        $age        =$_POST['age'];
        $dept       =$_POST['dept'];
        $gender     =$_POST['gender'];
        $image2 =$_POST['image2'];
        
        $image =$_FILES['image'];
        
        




        
        
        
        
        
        
        
        $email_explode=explode('@',$email);
        $email_end=end($email_explode);
        
        $cell_sub2=substr($number,0,5);
        
        $username_check=selectAll('wd_crud','username',$username);
        
        
        
        if(empty($name) || empty($email) || empty($number) || empty($username)|| empty($location)|| empty($age)|| empty($dept)|| empty($gender)){
            $msg=validate_msg('Field are required*');
            
        }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
            $msg=validate_msg('Email is not correct*');
            
        }elseif($email_end!='gmail.com'){
            $msg=validate_msg('Email is not valid*');

            
        }elseif(in_array($cell_sub2,['+88017','+88018','+88019','+88016','+88014','+88015'])==false){
            $msg=validate_msg('Number is not start with +88*');

            
        }elseif($username_check){
            $msg=validate_msg('Username is already Exist*');

            
        }else{
            if(empty($_FILES["image"]["error"] == 0)){

                $update_data="UPDATE wd_crud SET username='$username', name='$name', email='$email', number='$number', location='$location', age='$age', gender='$gender',dept='$dept',image='$image2' WHERE id='$id'";
                $querydata=connection()->query($update_data);

                $msg= validate_msg('Successfully insert data.','success');


                
            }else{
                $upload_image=imageupload($image,$folder='img/');
                $img_unique_name=$upload_image['unique_name'];
                $img_error_msg=$upload_image['error_msg'];
                if(empty($img_error_msg)){

                    $update_data="UPDATE wd_crud SET username='$username', name='$name', email='$email', number='$number', location='$location', age='$age', gender='$gender',dept='$dept',image='$img_unique_name' WHERE id='$id'";
                    $querydata=connection()->query($update_data);

                    $msg= validate_msg('Successfully insert data.','success');


                }else{
                    $msg= $img_error_msg;

                }
                
            }
        }
        
        
        
    }
    
    
    ?>



    <?php
    
    if(isset($_GET['userid'])){
        $userid=$_GET['userid'];
        $sel_data_by_id=selectwhere('wd_crud','id',$userid)->fetch_assoc();
        ?>
    <div class="wrap shadow">
        <a class="btn btn-primary btn-sm mb-2" href="index.php">Back</a>

        <div class="card">
            <div class="card-body">
                <h2>Update Users</h2>

                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                    ?>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input class="form-control" type="text" name="username" id="username" value="<?php echo $sel_data_by_id['username']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $sel_data_by_id['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $sel_data_by_id['email']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input class="form-control" type="number" name="number" id="number" value="<?php echo $sel_data_by_id['number']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input class="form-control" type="text" name="location" id="location" value="<?php echo $sel_data_by_id['location']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input class="form-control" type="number" name="age" id="age" value="<?php echo $sel_data_by_id['age']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <input class="form-control" type="text" name="dept" id="dept" value="<?php echo $sel_data_by_id['dept']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="custom-select" name="gender" id="gender">
                            <?php
                            if($sel_data_by_id['gender']=='Male'){
                                ?>
                            <option selected value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            <?php
                                
                            }elseif($sel_data_by_id['gender']=='Female'){
                                ?>
                            <option value="Male">Male</option>
                            <option selected value="Female">Female</option>
                            <option value="Others">Others</option>
                            <?php
                                
                            }else{
                                ?>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option selected value="Others">Others</option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-2 custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input type="hidden" name="image2" value="<?php echo $sel_data_by_id['image']; ?>" id="customFile">

                    </div>
                    <img src="img/<?php echo $sel_data_by_id['image']; ?>" alt="none" class="img-fluid mb-2">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $sel_data_by_id['id']; ?>">
                        <input class="btn btn-primary w-100" type="submit" name="update" value="Update">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    }
        ?>









    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!--
    <script>
        $('input[name="image"]').change(function(e){
            let file_url=URL.createObjectURL(e.target.files[0]);
            $("#img_show").attr('src',file_url);
        })
    </script>
-->
</body>

</html>
