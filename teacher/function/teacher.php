<?php
session_start();
include_once('../db/dpconfig.php');

$teacherid       = $_REQUEST['teacherid'];
$class           = $_REQUEST['class'];
$subject         = $_REQUEST['subject'];
// $video            = $_REQUEST['video'];
// $notes          = $_REQUEST['notes'];
$lession         = $_REQUEST['lesson'];
$status = "1";

if(!empty($_FILES['notes']))
  {
    $path = "file/";
    $path = $path . basename( $_FILES['notes']['name']);
    if(move_uploaded_file($_FILES['notes']['tmp_name'], $path)) {
   //   echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
    } else{
      //  echo "There was an error uploading the file, please try again!";
    }
  }


$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);

if ((($_FILES["video"]["type"] == "video/mp4")
|| ($_FILES["video"]["type"] == "audio/mp3")
// || ($_FILES["video"]["type"] == "audio/wma")
// || ($_FILES["video"]["type"] == "image/pjpeg")
// || ($_FILES["video"]["type"] == "image/gif")
// || ($_FILES["video"]["type"] == "image/jpeg"))

// && ($_FILES["video"]["size"] < 20000)
// && in_array($extension, $allowedExts)
))

  {
  if ($_FILES["video"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["video"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["video"]["name"] . "<br />";
    echo "Type: " . $_FILES["video"]["type"] . "<br />";
    echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";

    if (file_exists("video/" . $_FILES["video"]["name"]))
      {
      echo $_FILES["video"]["name"] . " already exists. ";
      }
    else
      {
        $video = "video/";
        $video = $video. basename($_FILES["video"]["name"]);
        move_uploaded_file($_FILES["video"]["tmp_name"], $video);
      //  $video = "Stored in: " . "../video/" . $_FILES["video"]["name"];
      }
    }
  }

 $query = "INSERT INTO `student_panel`(`teacherid`,`subject`, `notes`, `lession`,`video`,`class`,`status`) VALUES ('$teacherid','$subject','$path','$lession','$video','$class','$status')";
$result=mysqli_query($conn, $query);
     
if($result){
    $_SESSION['success'] = "<div class = 'alert alert-success'><span class ='label label-success'>Class Added successfully..!</span></div>";
    header('Location:../user.php');
}