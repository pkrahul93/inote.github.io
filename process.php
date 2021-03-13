<?php  
include ("connection.php");
error_reporting(0);

// Inserted data into Database...
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset( $_POST['submit'])){

    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "Pics/".$filename;
    move_uploaded_file($tempname, $folder);

  // Sql query to be executed
  $sql = "INSERT INTO `inote` (`title`,`pics`, `description`) VALUES ('$title','$folder', '$desc')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
    echo "<script>alert('Records are inserted Successfully..!')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/Crudapp/iNote.php">
    <?php
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

