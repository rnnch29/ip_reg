<?php
include 'conn.php';

$user_id = $_POST['user_id'];
$fname = $_POST['emp_fname'];
$lname = $_POST['emp_lname'];
$gender = $_POST['emp_gender'];
$birth = $_POST['emp_birth'];
$phone = $_POST['emp_phone'];
$enroll = $_POST['emp_enroll'];
$email = $_POST['emp_email'];
$address = $_POST['emp_address'];


$sql = "UPDATE employee SET 
emp_fname = '$fname',
emp_lname = '$lname',
emp_gender = '$gender',
emp_birth = '$birth',
emp_phone = '$phone',
emp_enroll = '$enroll',
emp_email = '$email',
emp_address = '$address',
fac_id = '$faculty',
ra_id= '$rank' 
WHERE user_id='$user_id'";

$result = mysqli_query($conn,$sql);

if($result){
    echo "Data updated successfully.";
    echo "<script>alert('อัพเดทข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_stu.php';</script>";
}else{
    echo "Error updating data: " . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถอัพเดทข้อมูลได้');</script>";
}

mysqli_close($conn)

?>