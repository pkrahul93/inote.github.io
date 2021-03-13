<?php
include ("connection.php");
// error_reporting(0); 

// Update the record
if (isset($_POST['submit'])) 
{
  $ttl = $_POST['title'];
  $desc = $_POST['desc'];

  $query = "UPDATE inote SET title='$ttl' && description='$desc' WHERE s_no='$sno'";

  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "<script>alert('Your Record has updated Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/iNote.php">
    <?php
  }
else{
    echo "Something went wrong! try again latter...";
}
}
?>