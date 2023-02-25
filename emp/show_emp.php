<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลอาจารย์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid py-5">
        <br>
        <div class="col-md-auto">
            <h1 class="text-center" style="color: #fe965a;">ข้อมูลอาจารย์</h1><br>
        </div>

        <?

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th class="col-1">รหัสประจำตัว</th>
                    <th class="col-1">ชื่อ</th>
                    <th class="col-1">นามสกุล</th>
                    <th>รหัสตำแหน่ง</th>
                    <th>เบอร์</th>
                    <th>วันแรกที่ทำงาน</th>
                    <th class="col-1">วันเกิด</th>
                    <th>อายุ</th>
                    <th class="col-1">อีเมล</th>
                    <th class="col-1">ที่อยู่</th>
                    <th class="col-1">รหัสคณะ</th>
                    <th class="col-1">แก้ไข</th>
                    <th class="col-1">ลบ</th>
                </tr>
            </thead>
            <tbody>
               

                <?php $sql = "SELECT * FROM employee";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)): 

                $birthdate = $row['emp_birth'];
                // Create a DateTime object for the birthdate
                $dob = new DateTime($birthdate);

                // Get the current date
                $now = new DateTime();

                // Calculate the difference between the birthdate and the current date
                $diff = $now->diff($dob);

                // Get the age from the difference object
                $age = $diff->y;
                
                ?>
                
                <tr>
                    <td>
                        <?php echo $row['user_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_fname']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_lname']; ?>
                    </td>
                    <td>
                        <?php echo $row['ra_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_phone']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_enroll']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_birth']; ?>
                    </td>
                    <td>
                        <?php echo $age; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_email']; ?>
                    </td>
                    <td>
                        <?php echo $row['emp_address']; ?>
                    </td>
                    <td>
                        <?php echo $row['fac_id']; ?>
                    </td>
                    <td><a href ="JavaScript:if(confirm('Confirm Edit?')==true){window.location='editForm_emp.php?user_id=<?php echo $row['user_id']; ?>';} " class="btn btn-warning">แก้ไข</a></td>
                    <td ><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete_emp.php?user_id=<?php echo $row['user_id']; ?>';} " class="btn btn-danger">Delete</a></td>
                                    
                <?php endwhile; ?>
            </tbody>
        </table>
  
        <a href="Emp_addForm.php" class="btn btn-success">เพิ่มข้อมูลพนักงาน</a>


    </div>





</body>

</html>

<script languag = "JavaScript">
    function Del(mypage){
        var agree = confirm("Are you sure you want to");
        if(agree){
            window.location=mypage;
        }
    }
</script>