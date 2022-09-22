<?php
$conn=mysqli_connect("localhost","root","","php_overview") or die("connection failed");
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index.php');
}
if(isset($_REQUEST['submit'])){
    $name=$_POST['input_Name'];
    $fname=$_POST['input_FatherName'];
    $fees=$_POST['input_Fees'];
    $course=$_POST['input_Course'];

    $sql="INSERT INTO students (name,fname,Fees,course) VALUES('$name','$fname','$fees','$course')" or die("query failed");
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('data is successfully submitted')</script>";
    }
    else{
        echo "<script>alert('error occur')</script>";
    }

}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
           <h1 class="text-center text-success">Registration Form</h1>
           <form action="" method="post">
            <div class="form-group mt-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="input_Name">
            </div>
            <div class="form-group mt-3">
                <label for="Name">FatherName</label>
                <input type="text" class="form-control" name="input_FatherName">
            </div>
            <div class="form-group mt-3">
                <label for="Name">Fees</label>
                <input type="text" class="form-control" name="input_Fees">
            </div>
            <div class="form-group mt-3">
                <label for="Name">Course</label>
                <input type="text" class="form-control" name="input_Course">
            </div>
            <div class="form-group mt-3">
                
                <input type="submit" class="btn btn-success btn-lg" value="Submit" name="submit">
                <a href="page2.php" class="btn btn-success btn-lg">Show data</a>
                <a href="logout.php" class="btn btn-success btn-lg">Logout </a>
            </div>

           </form>
        </div>

    </div>

</div>    
</body>
</html>