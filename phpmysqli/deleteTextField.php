<?php

require('dbconnect.php');
$id= $_POST["idemployees"];

$sql="DELETE FROM employees WHERE id = $id";
$result =mysqli_query($con,$sql);

if($result){
    header("Location:index.php");
    exit(0);
}else{
    echo "fail!";
}

?>