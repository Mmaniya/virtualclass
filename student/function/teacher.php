<?php
session_start();
include_once('../db/dpconfig.php');

$teacherid              = $_REQUEST['teacherid'];
$class             = $_REQUEST['class'];
$subject           = $_REQUEST['subject'];
$video            = $_REQUEST['video'];
// $notes              = $_REQUEST['notes'];
$lession         = $_REQUEST['lesson'];
$status = "1";

if(!empty($_FILES['notes']))
  {
    $path = "../file/";
    $path = $path . basename( $_FILES['notes']['name']);
    if(move_uploaded_file($_FILES['notes']['tmp_name'], $path)) {
   //   echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
    //  " has been uploaded";
    } else{
      //  echo "There was an error uploading the file, please try again!";
    }
  }

  if(!empty($_FILES['video']))
  {
    $videopath= "../file/video/";
    $videopath = $videopath . basename( $_FILES['video']['name']);
    if(move_uploaded_file($_FILES['video']['tmp_name'], $videopath)) {
   //   echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
    //  " has been uploaded";
    } else{
      //  echo "There was an error uploading the file, please try again!";
    }
  }



$query = "INSERT INTO `student_panel`(`teacherid`,`subject`, `notes`, `lession`,`video`,`class`,`status`) VALUES ('$teacherid','$subject','$path','$lession','$videopath','$class','$status')";
$result=mysqli_query($conn, $query);
     
if($result){
    $_SESSION['success'] = "<h3 class ='label label-success'>class Added successfully..!</h3>";
    header('Location:../user.php');
}