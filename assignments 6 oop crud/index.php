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
     if(isset($_GET['id'])){
        $id=$_GET['id'];
         $image=$_GET['image'];
        $delete_user=$user->delete_data('user','id',$id);
         if($delete_user){
             unlink('img/'.$image);
             header("Location:index.php");
         }
     }
    if(isset($_POST['insert'])){
        $username=$_POST['username'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $image=$_FILES['image'];
        
        
        $create=$user->insert_data($username,$name,$email,$number,$image);
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
                          

                            <div class="mb-2 custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>

                            </div>
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
               
                <h2>All Data</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                     
                        <?php
                        $getalluser=$user->get_user('user','ASC');
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
                            <td><img src="img/<?php echo $data['image']; ?>" alt="none"></td>
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
