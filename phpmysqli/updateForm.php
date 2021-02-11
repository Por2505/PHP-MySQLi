<?php

require('dbconnect.php');

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname= $_POST["lname"];
$gender= $_POST["gender"];
$skill= implode(",",$_POST["skill"]);


$sql = "UPDATE employees SET fname= '$fname',lname='$lname',gender='$gender',skill='$skill' WHERE id = $id";

$result = mysqli_query($con,$sql);

if($result){
    header("Location:index.php");
    exit(0);
}
else{
    echo mysqli_error($con);
}

?>
