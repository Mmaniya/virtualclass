<?php
session_start();
include_once('../db/dpconfig.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $uname = $row["username"];
         $upassword = $row["password"];
         if( $uname == $username && $upassword == $password){
             $_SESSION['admin'] = $uname;
            header('Location: ../dashbord.php');
         }else{
            header("Location:../index.php");
         }
    }
}
?>