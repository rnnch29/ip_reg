<?php

include 'conn.php';
?>
<?php
    // Get the form data
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $faculty = $_POST['faculty'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert the data into the database
    $sql = "INSERT INTO student (user_id, stu_fname, stu_lname, stu_gender, stu_birth, fac_id, branch_id, stu_phone,  stu_email, stu_address, stu_gpa, ra_id) 
            VALUES ('$user_id', '$fname', '$lname', '$gender', '$birth', '$faculty', '$branch', '$phone', '$email', '$address', '0','4')";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='stu_show.php';</script>";
    } else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูล!');</script>";
        echo "<script>window.location='stu_show.php';</script>";
    }

// Close the database connection
mysqli_close($conn);
?>