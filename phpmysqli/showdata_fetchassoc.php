<?php
require('dbconnect.php');
$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);



echo "id".$row['id']."<br>";
echo "name".$row['fname']."<br>";
echo "lastname".$row['lname']."<br>";
echo "gender".$row['gender']."<br>";
echo "skill".$row['skill']."<br>";
echo "<hr>";
?>