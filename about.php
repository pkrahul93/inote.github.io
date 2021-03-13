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
    <title>iNote</title>
    <link rel="stylesheet" href="Css/style1.css">
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
    <div class="section">
    <   h1>**...About Me...**</h1>
        <img id="img1" src="Pics/rahul2.jpg" alt="Image not found">
        <h2>@...Smart Rahul...@</h2>
    </div>
    <div class="sect1">
        <p>@....Hello Dear Friends......<br>I am Rahul kumar pandey a student of Computer Science Engineering. I am  a student of Guru Gobind Singh Educational Socitey and Technical Campus, Kandra, Bokaro, Jharkhand, India. I am the student of (CSE_batch_2017-2021) of my collage. Singing, Writting Shayari/Songs, Web_Designing and Watching Science_Fiction Movies are my favourite Hobbies. I like to participate in Social activities. I am good and quick learner as well as a hard_worker. Whenever I get free time think more new ideas for my upcoming Projects. I belongs to a middle Class family, my father is a private teacher in a Private School. To make a succesfull and profitiable Software Enginneer is my only one goal of my life. I want to do world tour, it's my dream.</p>
    </div>

    <div class="footer">
        <h2>*...Copyright to &copy; iNote 2021...*</h2>
    </div>

</body>

</html>
