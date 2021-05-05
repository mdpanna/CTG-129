<?php
require_once('lib/autoload.php');


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $image_name=$_GET['image'];
    
    $delete=delete_data('wd_crud','id',$id);
    unlink('img/'.$image_name);
    if($delete){
        header('location:index.php');
       $msg=validate_msg('Data Delete Successfully','success');
    }else{
        echo $delete;
    }
}
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
    if(isset($_POST['insert'])){
        $username=$_POST['username'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $age=$_POST['age'];
        $location=$_POST['location'];
        $gender=$_POST['gender'];
        $dept=$_POST['dept'];
        $image=$_FILES['image'];
        
        $upload_image=imageupload($image,$folder='img/');
        $img_unique_name=$upload_image['unique_name'];
        $img_error_msg=$upload_image['error_msg'];
        
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
            if(empty($img_error_msg)){
                $insertdata="INSERT INTO wd_crud(username,name,email,number,location,age,gender,dept,image)VALUES('$username','$name','$email','$number','$location','$age','$gender','$dept','$img_unique_name')";
                $querydata=connection()->query($insertdata);
                if($querydata){
                    $msg= validate_msg('Successfully insert data.','success');
                }
            }else{
                $msg= $img_error_msg;
            }
        }

    }
    ?>
    <div class="wrap-table shadow">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            Create
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Student File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input class="form-control" type="text" name="username" id="username">

                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email" id="email">

                            </div>
                            <div class="form-group">
                                <label for="">Cell</label>
                                <input class="form-control" type="number" name="number" id="number">

                            </div>
                            <div class="form-group">
                                <label for="">Location</label>
                                <input class="form-control" type="text" name="location" id="location">

                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input class="form-control" type="number" name="age" id="age">

                            </div>
                            <div class="form-group">
                                <label for="">Department</label>
                                <input class="form-control" type="text" name="dept" id="dept">

                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select class="custom-select" name="gender" id="gender">
                                    <option selected>Open this select menu</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <div class="mb-2 custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>

                            </div>
                            <img src="img/" alt="none" class="img-fluid">
                            <div class="form-group">
                                <input class="btn btn-primary w-100" type="submit" name="insert" value="Insert">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <?php
                if(isset($msg)){
                
                ?>
                <div class="col-12">
                <?php echo $msg; ?>
                </div>
                
                <?php
                }
                ?>
                <h2>All Data</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Location</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Image</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $getalluser=selectAll('wd_crud','ASC');
                        if($getalluser){
                            $i=1;
                            while($data=$getalluser->fetch_assoc()){
                                
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['number']; ?></td>
                            <td><?php echo $data['location']; ?></td>
                            <td><?php echo $data['age']; ?></td>
                            <td><?php echo $data['gender']; ?></td>
                            <td><img src="img/<?php echo $data['image']; ?>" alt="none"></td>
                            <td><?php echo $data['dept']; ?></td>
                            <td><a href="view_user.php?userid=<?php echo $data['id']; ?>" class="text text-primary">View</a> || <a href="edit.php?userid=<?php echo $data['id']; ?>" class="text text-success">Edit</a> || <a href="?id=<?php echo $data['id']; ?>&image=<?php echo $data['image']; ?>" class="text text-danger">Delete</a></td>
                            
                        </tr>

                        <?php
                        
                            }
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
