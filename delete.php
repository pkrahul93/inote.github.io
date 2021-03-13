<?php
include ("connection.php");
error_reporting(0);

// Deleting data into database..
$sn =$_GET['sn'];
$query = "DELETE FROM inote WHERE s_no ='$sn'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script><font color='green'>alert('Record Deleted from the Database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/Crudapp/iNote.php">
    <?php
}
else {
    echo "<font color='green'>Failed to Delete record from the Database";
}     
?>