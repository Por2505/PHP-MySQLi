<?php
require('dbconnect.php');
$id = $_GET["id"];

$sql="SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$skill_array = array("Java","PHP","Python","HTML"); //เตรียมตัวเลือก

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container my-3">
    <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
    <form action="updateForm.php?id=<?php echo $row["id"];?>" method="POST">
    <input type="hidden" value="<?php echo $row["id"];?>" name="id">
        <div class="form-group">
            <lable for="fname">ชื่อ</lable>
            <input type="text" name="fname" id="" class="form-control" value="<?php echo $row["fname"];?>">
        </div>
        <div class="form-group">
            <lable for="lname">นามสกุล</lable>
            <input type="text" name="lname" id="" class="form-control" value="<?php echo $row["lname"];?>">
        </div>
        <div class="form-group">
            <lable for="gender">เพศ</lable>
            <?php 
                if($row["gender"]=='female'){
                    echo "<input type='radio' name='gender' value='male'>ชาย";
                    echo "<input type='radio' name='gender' value='female' checked>หญิง";
                    echo "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else if($row["gender"=='male']){
                    echo "<input type='radio' name='gender' value='male' checked>ชาย";
                    echo "<input type='radio' name='gender' value='female'>หญิง";
                    echo "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else {
                    echo "<input type='radio' name='gender' value='male'>ชาย";
                    echo "<input type='radio' name='gender' value='female'>หญิง";
                    echo "<input type='radio' name='gender' value='other' checked>อื่นๆ";
                }
            ?>

        </div>
        <div class="form-group">
            <lable for="skill">ทักษะ</lable>
            <?php
            $skills = explode(",",$row["skill"]);
            foreach($skill_array as $value){
                if(in_array($value,$skills)){
                    echo "<input type='checkbox' name='skill[]' value='$value' checked> $value";
                }else{
                    echo "<input type='checkbox' name='skill[]' value='$value'> $value";
                }
            }
            ?>

        </div>
        <input type="submit" value="Update" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">home</a>
    </form>
    
    </div>
</body>
</html>