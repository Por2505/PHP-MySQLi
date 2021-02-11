<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container my-3">
    <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
    <form action="insertData.php" method="POST">
        <div class="form-group">
            <lable for="fname">ชื่อ</lable>
            <input type="text" name="fname" id="" class="form-control">
        </div>
        <div class="form-group">
            <lable for="lname">นามสกุล</lable>
            <input type="text" name="lname" id="" class="form-control">
        </div>
        <div class="form-group">
            <lable for="gender">เพศ</lable>
            <input type="radio" name="gender" value="male">ชาย
            <input type="radio" name="gender" value="female">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ
        </div>
        <div class="form-group">
            <lable for="skill">ทักษะ</lable>
            <input type="checkbox" name="skill[]" value="Java">Java
            <input type="checkbox" name="skill[]" value="PHP">PHP
            <input type="checkbox" name="skill[]" value="Python">Python
            <input type="checkbox" name="skill[]" value="HTML">HTML
        </div>
        <input type="submit" value="Save" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">home</a>
    </form>
    
    </div>
</body>
</html>