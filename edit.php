<?php
include("connection.php");
error_reporting(0);

$sn = $_GET['sn'];
$tl = $_GET['ttl'];
$ds = $_GET['ds'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style1.css">
    <title>Updating_Window</title>
    
</head>
<body>
    <form action="" method ="GET">
        <table border="0" bgcolor="black" align="center" cellspacing="20">
            <tr>
                <td>S.No</td>
                <td><input type="text" name="sno" placeholder="S.No" value= "<?php echo "$sn" ?>"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="etl" placeholder="Title" value= "<?php echo "$tl" ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="eds" placeholder=""><?php echo "$ds"?></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" id="btn" name="submit" value="Update">
                </td>
            </tr>>
        </table>
    </form>

</body>
</html>

<?php
include ("connection.php");

if ($_GET['submit']) {

    $sn = $_GET['sno'];
    $ttl = $_GET['etl'];
    $des = $_GET['eds'];

$query = "UPDATE inote SET s_no='$sn', title='$ttl', description='$des' WHERE s_no='$sn'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Records are Updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/Crudapp/iNote.php">
    <?php

}
else{
    echo "Something went wrong! Record updation is failed.";
}
}
?>