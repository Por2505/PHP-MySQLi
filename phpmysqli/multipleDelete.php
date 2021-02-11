<?php

require('dbconnect.php');
$id_arr = $_POST['idcheckbox'];

$multi_id = implode(",",$id_arr);
var_dump($multi_id);

$sql="DELETE FROM employees WHERE id in ($multi_id)";
$result =mysqli_query($con,$sql);

if($result){
    header("Location:index.php");
    exit(0);
}else{
    echo "fail!";
}

?>