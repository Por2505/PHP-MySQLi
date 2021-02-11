<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);
echo gettype($row);

echo "id".$row[0]."<br>";
echo "name".$row[1]."<br>";
echo "lastname".$row[2]."<br>";
echo "gender".$row[3]."<br>";
echo "skill".$row[4]."<br>";
echo "<hr>";




?>