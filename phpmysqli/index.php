<?php
require('dbconnect.php');
$sql = "SELECT * FROM employees ORDER BY fname ASC";
$result =mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$order = 1;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
<div class="container">
<h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
    <hr>
    <?php
    if($count>0){?>
        <form action="searchData.php" class="form-group" method="POST">
        <label for="">ค้นหาพนักงาน</label>
        <input type="text" placeholder="ป้อนชื่อพนักงาน" name="empname" class="form-control">
        <input type="submit" value="ค้นหา" class="btn btn-dark my-2">
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th>ลำดับที่</th>
                <th>fname</th>
                <th>lname</th>
                <th>gender</th>
                <th>skill</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูล checkbox</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $order++ ;?></td>
                <td><?php echo $row["fname"];?></td>
                <td><?php echo $row["lname"];?></td>
                <td>
                
                <?php 
                    if($row["gender"] == "male"){?>
                        ชาย
                <?php } else if($row["gender"] == "female"){?>
                    หญิง
                <?php } else { ?>
                    อื่นๆ
                <?php }?>
                
                </td>
                <td><?php echo $row["skill"];?></td>
                <td>
                <a href="editForm.php?id=<?php echo $row["id"];?>" class="btn btn-primary">แก้ไข</a>
                
                </td>
                <td>
                    <a href="deleteQueryString.php?idemp=<?php echo $row["id"]?>" class="btn btn-danger"
                    onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')"
                    >ลบข้อมูล</a>                
                </td> 
                <form action="multipleDelete.php" method="POST">
                    <td>
                        <input type="checkbox" name="idcheckbox[]" value="<?php echo $row["id"];?>">
                    </td> 
                
            </tr>
            <?php } ?>
        </tbody>
    </table>


    <?php } else{ ?>
    <div class="alert alert-danger">
    <b>ไม่มีข้อมูลพนักงาน!</b>
    </div>
    <?php }?>
    <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
    <?php if($count>0){ ?>
        <input type="submit" value="ลบข้อมูลcheckbox" class="btn btn-danger">
        <button class="btn btn-primary" onclick="checkAll()">เลือกทั้งหมด</button>
        <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
    <?php } ?>
    </form> 

    </div>

<script>
    function checkAll(){
        var form_element = document.forms[1].length;
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=true;
        }
    }
    function uncheckAll(){
        var form_element = document.forms[1].length;
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=false;
        }

    }
</script>

</body>

</html>