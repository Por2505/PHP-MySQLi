<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result =mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

while($row = mysqli_fetch_row($result)){
    echo "id".$row[0]."<br>";
    echo "name".$row[1]."<br>";
    echo "lastname".$row[2]."<br>";
    echo "gender".$row[3]."<br>";
    echo "skill".$row[4]."<br>";
    echo "<hr>";

}
?>