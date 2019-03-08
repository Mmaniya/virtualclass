<?php
session_start();
include_once('../../db/dpconfig.php');

$name               = $_REQUEST['name'];
$regno              = $_REQUEST['regno'];
$sclass             = $_REQUEST['sclass'];
$section            = $_REQUEST['section'];
$mobile           = $_REQUEST['mobile'];
$email          = $_REQUEST['email'];
$password           = $_REQUEST['password'];
$confirmpassword    = $_REQUEST['confirmpassword'];
$status = "1";

if($password != $confirmpassword){
           $_SESSION['msg']['err'] = "<div class = 'alert alert-danger'><span class = 'label label-danger'>Password And Confirm Password Not Same.!</span></div>";
            header("Location: ../studentregister.php");
}
else{
     $query = "INSERT INTO `student_details`(`student_name`, `regno`, `class`, `section`, `email`, `mobile`,`password`, `confirmpassword`, `status`) VALUES ('$name','$regno','$sclass','$section','$email','$mobile','$password','$confirmpassword','$status')";
     $result=mysqli_query($conn, $query);
     
        if ($result) {
            $_SESSION['student'] = "<h3 class ='label label-success'>Teacher Details Added successfully..!</h3>";
            header("Location: ../student.php");
        } else {
            $_SESSION['student'] = "<h3 class ='label label-danger'>Try Again..!</h3>";
            header("Location: ../student.php");
        }
    }