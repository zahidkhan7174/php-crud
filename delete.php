<?php
$conn=mysqli_connect("localhost","root","","php_overview") or die("connection failed");
$studentid=$_REQUEST['xyz'];
$result=mysqli_query($conn,"DELETE from students where student_id='$studentid'") or die("query failed");
if($result){
    header('location:page2.php');
}
else{
    echo "<script>alert('error occur')</script>";
}
?>