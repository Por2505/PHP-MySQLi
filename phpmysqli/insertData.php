<?php
require('dbconnect.php');

$fname = $_POST["fname"];
$lname= $_POST["lname"];
$gender= $_POST["gender"];
$skill= implode(",",$_POST["skill"]);



$sql= "INSERT INTO employees(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$skill')";
$result=mysqli_query($con,$sql);

if($result){
    header("Location:index.php");
    exit(0);
}
else{
    echo mysqli_error($con);
}

?>