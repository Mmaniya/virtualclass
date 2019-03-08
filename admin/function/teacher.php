<?php
session_start();
include_once('../db/dpconfig.php');

$name              = $_REQUEST['name'];
$staffid           = $_REQUEST['staffid'];
$class             = $_REQUEST['class'];
$subject           = $_REQUEST['subject'];
$mobile            = $_REQUEST['mobile'];
$mail              = $_REQUEST['email'];
$password          = $_REQUEST['password'];
$confirmpassword   = $_REQUEST['confirmpassword'];

$status = "1";

$query = "INSERT INTO `teacher_details`(`name`, `staff_id`, `class`, `subject`, `phone`, `mail`,`password`,`confirmpassword`,`status`) VALUES ('$name','$staffid','$class','$subject','$mobile','$mail','$password','$confirmpassword','$status')";
$result=mysqli_query($conn, $query);
     
if($result){
    $_SESSION['teacher'] = "<h3 class ='label label-success'>Teacher Details Added successfully..!</h3>";
    header('Location:../user.php');
}