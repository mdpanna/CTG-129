<?php
$username_error='';
$email_error='';
$number_error='';
$password_error='';
if(isset($_POST['insert'])){
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    
    
    if($username==""){
        $username_error.="<span class='d-block mt-2 alert alert-danger'>Username is empty</span>";
    }elseif($email==""){
        $email_error.="<span class='d-block mt-2 alert alert-danger'>Email is empty</span>";

    }elseif($number==""){
        $number_error.="<span class='d-block mt-2 alert alert-danger'>Number is empty</span>";

    }elseif($password==""){
        $password_error.="<span class='d-block mt-2 alert alert-danger'>Password is empty</span>";

    }else{
       $username_error='';
        $email_error='';
        $number_error='';
        $password_error=''; 
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
                        <form action="" method="post">
                            <h4 class="text-center">Form Get</h4>
                            <div class="form-group">
                                <label>Enter Username</label>
                                <input type="text" name="username" class="form-control">
                                <?php echo $username_error; ?>
                            </div>
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" name="email" class="form-control">
                                <?php echo $email_error; ?>

                            </div>
                            <div class="form-group">
                                <label>Enter Number</label>
                                <input type="number" name="number" class="form-control">
                                <?php echo $number_error; ?>

                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" class="form-control">
                                <?php echo $password_error; ?>

                            </div>
                            <div class="form-group">
                                <input type="submit" name="insert" class="btn btn-success w-100" value="Send">
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
