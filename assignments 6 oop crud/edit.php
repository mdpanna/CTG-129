<?php
require_once('lib/autoload.php');
$user=new User();
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
        $id         =$_POST['id'];
        $name       =$_POST['name'];
        $email      =$_POST['email'];
        $number     =$_POST['number'];
        $username   =$_POST['username'];
        $image2     =$_POST['image2'];
        $image      =$_FILES['image'];
        
        $table='user';
        $update_data=$user->update_data($id,$username,$name,$image2,$image,$email,$number,$table);
        
        
    }
    
    
    ?>



    <?php
    
    if(isset($_GET['userid'])){
        $userid=$_GET['userid'];
        $sel_data_by_id=$user->selectwhere('user','id',$userid)->fetch_assoc();
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
