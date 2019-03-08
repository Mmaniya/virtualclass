<?php
session_start();
include_once('../db/dpconfig.php');

$remove  = $_REQUEST['remove'];

$sql = "UPDATE `student_details` SET  `status`= '0' WHERE id = '$remove';";
$result = $conn->query($sql);
if($result){
    header("Location: ../student.php");
}

