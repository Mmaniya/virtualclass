<?php
session_start();
include_once('../db/dpconfig.php');

$remove  = $_REQUEST['removetid'];

$sql = "UPDATE `student_panel` SET  `status`= '0' WHERE id = '$remove';";
$result = $conn->query($sql);
if($result){
    header("Location: ../user.php");
}

