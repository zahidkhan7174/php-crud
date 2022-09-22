 <?php
 $conn=mysqli_connect("localhost","root","","php_overview")or die("connection failed");
 session_start();

 if(isset($_POST['submit'])){
    $user=$_POST['input_username'];
    $pass=$_POST['input_password'];

    $result=mysqli_query($conn,"SELECT * from login where username='$user' and password='$pass'")or die("query failed");
    $row=mysqli_fetch_array($result);
    if($row>0){
        $_SESSION['user_id']=$row['id'];
        header('location: dashboard.php');
    }
    else{
        echo "<script>alert ('username or password is not match')</script>";
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
    <div class="col-md-6 offset-3 mt-3">
        <h1 class="text-center text-success">Login Form</h1>
          <form action="" method="post">
          <div class="from-group mt-3 ">
                <label for="">UserName</label>
                <input type="text" class="form-control" name="input_username">
            </div>
            <div class="from-group mt-3">
                <label for="">password</label>
                <input type="password" class="form-control" name="input_password">
            </div>
            <div class="from-group mt-3">
                
                <input type="submit" class="btn btn-success btn-lg" name="submit" >
            </div>
          </form>
          
    </div>

   </div>
</div>
    
</body>
</html>