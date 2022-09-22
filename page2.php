<?php
$conn=mysqli_connect("localhost","root","","php_overview") or die("connection failed");

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
     <div class="col-md-12">
        <H1 class="text-center text-success">Student data</H1>
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>student_id</th>
                    <th>Name</th>
                    <th>FatherName</th>
                    <th>Fees</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result=mysqli_query($conn,"SELECT * from students");

                while($row=mysqli_fetch_assoc($result)){

                ?>
                <tr>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['Fees'];?></td>
                    <td><?php echo $row['course'];?></td>
                    <td><a href="update.php?xyz=<?php echo $row['student_id'];?>">Update  |</a><a href="delete.php?xyz=<?php echo $row['student_id'];?>">Delete  |</a></td>
                </tr>
                <?php  }?>
            </tbody>
        </table>

     </div>
    </div>

</div>
    
</body>
</html>