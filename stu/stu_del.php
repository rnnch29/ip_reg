<?php
include 'conn.php';

$id = $_GET['userID'];
$sql = "DELETE FROM student WHERE user_id='$id' ";
//echo $sql;
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_stu.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn);

?>
