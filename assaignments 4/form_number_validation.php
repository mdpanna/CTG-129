<?php
$number_error='';
if(isset($_POST['insert'])){
    
    $number=$_POST['number'];
    
    
    if($number==""){
        $number_error.="<span class='d-block mt-2 alert alert-danger'>Number is empty</span>";
    }elseif(strlen($number) > 11){
        $number_error.="<span class='d-block mt-2 alert alert-danger'>Number is not valid.</span>";

    }elseif(strlen($number) < 11){
        $number_error.="<span class='d-block mt-2 alert alert-danger'>Number is too small.</span>";

    }elseif(strlen($number) == 11){
        $number_error.="<span class='d-block mt-2 alert alert-success'>Number is correct.</span>";

    }else{
        $number_error.="<span class='d-block mt-2 alert alert-success'>Number is correct.</span>";


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
                            <h4 class="text-center">Form Number Validate</h4>

                            <div class="form-group">
                                <label>Enter Number</label>
                                <input type="number" name="number" class="form-control">
                                <?php echo $number_error; ?>

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
