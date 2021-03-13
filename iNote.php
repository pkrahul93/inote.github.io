<?php
// Connect to the Database...
include ("connection.php");
include ("process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iNote</title>
  <link rel="stylesheet" href="Css/style.css">
</head>
<body>
  <div class="navbar">
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
  </div>
  <div class="container">
    <h2>Add a Note</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="titl">
        <label for="title" class="fttl1">Title</label>
        <input type="text" class="ttl" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="pic">
        <input type="file" name="file" id="pic">
      </div>
      <div class="des">
          <label for="desc" class="fttl2">Discription</label>
          <textarea class="ttl" id="desc" name="desc" rows="3"></textarea>
      </div>
      <div class="check">
        <input type="checkbox" class="fcheck" id="check1">
        <label for="check1">Check me out</label>
      </div>
        <button type="submit" name="submit" id="btn1">Add Note</button>
    </form>
  </div>

  <div class="container2">
    <table border="0" width="100%" class="table" id="myTable" cellspacing="15">
      <thead>
        <tr>
          <th style="font-size: 20px; color: blue;">S.No</th>
          <th style="font-size: 20px; color: blue;">Title</th>
          <th style="font-size: 20px; color: blue;">Pics</th>
          <th style="font-size: 20px; color: blue;">Description</th>
          <th style="font-size: 20px; color: blue;">Noted On</th>
          <th style="font-size: 20px; color: blue;" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `inote`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row' class='sect'>". $sno . "</th>
            <td align='center' class='sect1'>". $row['title'] . "</td>
            <td align='center' class='sect5'><img src='". $row['pics'] . "' alt='Error in loading.' height='125' width='132'></td>
            <td align='center' class='sect2'>". $row['description'] . "</td>
            <td align='center' class='sect3'>". $row['date'] . "</td>
            
            <td class='sect4'><a href = 'edit.php?sn=$row[s_no]&ttl=$row[title]&ds=$row[description]'>
            <input type='submit' value='Edit' id='edt'></a></td>
            
            <td class='sect4'><a href ='delete.php?sn=$row[s_no]' onclick='return checkdelete()'>
            <input type='submit' value='Delete' id='del'></a></td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
  <div class="footer">
    <h2>*...Copyright to &copy; iNote 2021...*</h2>
  </div>
</body>

</html>
