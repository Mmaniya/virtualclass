<?php
session_start();
include_once('../db/dpconfig.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM student_details WHERE  email='$username' AND password='$password' AND status='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $uname = $row["email"];
         $name = $row["name"];
         $id = $row["id"];
         $upassword = $row["password"];
         if( $uname == $username && $upassword == $password){
             $_SESSION['student_name'] = $name;
             $_SESSION['student_id'] = $id;
           header('Location: ../dashbord.php');
         }else{
            header("Location:../index.php");
         }
    }
}else{
  header("Location:../index.php");
}
?>