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
    
    if(isset($_GET['userid'])){
        $userid=$_GET['userid'];
        $select_user=$user->selectwhere('user','id',$userid);
        if($select_user){
            while($data=$select_user->fetch_assoc()){
          
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto mt-5">
                <div class="card p-5">
                    <img class="simg shadow ml-auto img-fluid mb-3"  src="img/<?php echo $data['image']; ?>" alt="">
                    <h2 class="text-center"><?php echo $data['name']; ?></h2>
                    <p class="text-center"><?php echo $data['username']; ?></p>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $data['name']; ?></td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td><?php echo $data['email']; ?></td>
                            </tr>

                            <tr>
                                <td>Cell</td>
                                <td><?php echo $data['number']; ?></td>
                            </tr>

                           
                        </table>

                        <a class="btn btn-primary btn-sm" href="index.php">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
          
            }
        }
    }else{
        header('Location:table.php');
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
