<?php
// Connect to the Database...
include ("connection.php");
include ("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSEHub</title>
    <link rel="stylesheet" href="css/style4.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li class="navigation" id="item-1"><a href="inote.php">Home</a></li>
            <li class="navigation" id="item-4"><a href="about.php">About</a></li>
            <li class="navigation" id="item-2"><a href="gallery.php">Gallery</a></li>
            <li class="navigation" id="item-5"><a href="cv.php">My Resume</a></li>
            <li id="dt">
      <?php
        $query = "SELECT * FROM `inote`";
        $data = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($data);

        if ($result != 0) {
          echo "Welcome SmartRahul ";
        }
      ?>
            </li>
        </ul>
        <img class="img" src="Pics/logo.png" alt="Image not found">
    </nav>
    <br><br><br><br>
    <div class="sect1">
        <?php
include ("connection.php");
error_reporting(0);

$query = "SELECT * FROM `inote`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total !=0) 
{
    while ($result = mysqli_fetch_assoc($data)) 
    {
        echo"
            <img src='".$result['pics']."'height='310' width='390'>
        ";
    }
}
else{
    echo "No records Found...";
}

?>    
    </div> 
    <div class="footer">
        <h2>*...Copyright to &copy; iNote 2021...*</h2>
    </div>
    
</body>
</html>
