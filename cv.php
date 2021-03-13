<?php
// Connect to the Database...
include ("connection.php");
include ("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style2.css">
    <title>My_Resume</title>
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
            <img id="img1" src="Pics/logo.png" alt="Image not found">
    </div>
    <br><br><br><br><br>
    <table cellspacing="16" border="0" width="75%" style="padding-left: 12px; font-size: 30px; font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td align="center" colspan="2" class="title">My Introduction</td>
        </tr>
        <tr>
            <td class="move" colspan="2" style="font-size: 40px; padding-left: 12px; font-weight: bold; border-radius: 21px;">Personal Information...
            <img class="pic" src="Pics/Rahul.jpg" alt="Error in loading..">
            </td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Name :</td>
            <td>Rahul Kumar Pandey</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Father's Name :</td>
            <td>Sri Madhusudan Pandey</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Mother's Name :</td>
            <td>Smt Ranju Devi</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Sex :</td>
            <td>Male</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">DOB :</td>
            <td>11th March 1993</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Religion :</td>
            <td>Hindu</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Nationality :</td>
            <td>Indian</td>
        </tr>
        <tr>
            <td style="color:rgb(240, 13, 229);">Language Known :</td>
            <td>Hindi & English</td>
        </tr>
    </table>

    <table cellspacing="16" border="0" width="75%" style="background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move"colspan="2" style="font-size: 30px; font-weight: bold; height: 45px; padding-left: 12px; border-radius: 15px;">Contact Information...</td>
        </tr>
        <tr>
            <td><img src="Pics/12.jpg" alt="" width="45px" height="45px"></td>
            <td style="padding-left: 12px; font-size: 30px; font-weight: bold;">+91 9123429191 / +91 7050500922</td>
        </tr>
        <tr>
            <td><img src="Pics/kitk.jpg" alt="" width="45px" height="45px"></td>
            <td style="padding-left: 12px; font-size: 30px; font-weight: bold;">9123429191</td>
        </tr>
        <tr>
            <td><img src="Pics/mail1.png" alt="" width="45px" height="45px"></td>
            <td style="padding-left: 12px; font-size: 30px; font-weight: bold;">pkrahul93@gmail.com</td>
        </tr>
        <tr>
            <td><img src="Pics/mail2.jpg" alt="" width="45px" height="45px"></td>
            <td style="padding-left: 12px; font-size: 30px; font-weight: bold;">www.onlineguru93.blogspot.com</td>
        </tr>
    </table>

    <table cellspacing="16" border="3" width="75%" style="padding-left: 12px; font-size: 25px; font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move" colspan="4" style="font-size: 30px; height: 45px; padding-left: 12px; border-radius: 15px; font-weight: bold;">Educational Qualification...</td>
        </tr>
        <tr>
            <th style="color:rgb(9, 204, 253);">Examination</th>
            <th style="color:rgb(9, 204, 253);">Board</th>
            <th style="color:rgb(9, 204, 253);">Nameof the School/Collage</th>
            <th style="color:rgb(9, 204, 253);">%/CGPA</th>
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 12px; color: ghostwhite; font-size: 20px; font-weight: bold; background-color: rgba(29, 18, 190, 0.568);">2007 - 2008</td>
        </tr>
        <tr>
            <td>SSC / 10th </td>
            <td>JAC Board</td>
            <td>J.K.R.R. Hindi High School Chirkunda</td>
            <td>70</td>
        </tr>

        <tr>
            <td colspan="3" style="padding-left: 12px; color: ghostwhite; font-size: 20px; font-weight: bold; background-color: rgba(29, 18, 190, 0.568);">2012 - 2014</td>
        </tr>
        <tr>
            <td>12th (I.Sc)</td>
            <td>JAC Board</td>
            <td>Miajan Memorial Inter Collage Bijulia</td>
            <td>47.2</td>
        </tr>

        <tr>
            <td colspan="3" style="padding-left: 12px; color: ghostwhite; font-size: 20px; font-weight: bold; background-color: rgba(29, 18, 190, 0.568);">2017 - 2021</td>
        </tr>
        <tr>
            <td>B.Tech</td>
            <td>JAC Board</td>
            <td>G.G.S.E.S.T.C Kandra Bokaro JH..</td>
            <td>Appearing</td>
        </tr>
    </table>

    <table cellspacing="16" border="0" width="75%" style="padding-left: 12px; font-size: 30px; font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move" style="font-size: 30px; border-radius: 15px; height: 45px; padding-left: 12px; font-weight: bold;">Additional Qualification...</td>
        </tr>
        <tr>
            <td style="color:green;"><img src="Pics/mic.jpg" height="35" width="35"> 2011-2013 : -- Diploma In Classical Singing.</td>
        </tr>
        <tr>
            <td style="color:green;"><img src="Pics/mic.jpg" height="35" width="35"> 2015-2017 : -- Senior Diploma In Classical Singing.</td>
        </tr>
        <tr>
            <td style="color:green;"><img src="Pics/hom.jpg" height="35" width="35"> From Prayag Sangeet Samiti Allahabad</td>
        </tr>
    </table>
    
    <table cellspacing="16" border="0" width="75%" style="color:blue; padding-left: 12px; font-size: 30px; font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move" colspan="2" style="font-size: 30px; border-radius: 15px; height: 45px; padding-left: 12px; font-weight: bold;">Command Languages...</td>
        </tr>
        <tr>
            <td>Markup/Others :</td>
            <td style="color:rgb(190, 39, 110);">HTML, CSS, JavaScript, Node.js, PHP</td>
        </tr>
        <tr>
            <td>OOP Languages :</td>
            <td style="color:rgb(190, 39, 110)">C/C++ , Python , Java</td>
        </tr>
    </table>

    <table cellspacing="16" border="0" width="75%" style="color:rgb(247, 15, 235); padding-left: 12px; font-size: 30px; font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move" collspan="2" style="font-size: 30px; border-radius: 15px; height: 45px; padding-left: 12px; font-weight: bold;">Skill Section...</td>
        </tr>
        <tr>
            <td>* Website Development and Web Designing..</td>
        </tr>
        <tr>
            <td>* Web Application Development..</td>
        </tr>
        <tr>
            <td>* Computer Application Development Using Python..</td>
        </tr>
        <tr>
            <td>* Game Development Using Python..</td>
        </tr>
        <tr>
            <td>* Website Development using Wordpress..</td>
        </tr>
        <tr>
            <td>* Website Development using Bootstrap..</td>
        </tr>
        <tr>
            <td>* Website Development using jQuery..</td>
        </tr>
    </table>
    <table cellspacing="16" border="0" width="75%" style="padding-left: 18px; font-size: 30px; color:rgb(212, 248, 10); font-weight: bold; background-color: rgba(0, 0, 0, 0.822);">
        <tr>
            <td class="move" collspan="2" style="font-size: 40px; border-radius: 15px; height: 65px; padding-left: 12px; font-weight: bold;">My Project Works...</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Auto BirthDay Wisher App.....<button a href=""  class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's an automatic BirthDay Wisher App that wishes friends automatic according to him/her Birthday, Designed using Python and it's Modules..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Duck-Hunt Game....<button a href="" class="btn">Play</button></td>
        </tr>
        <tr>
            <td>It is a kids shooting game for entertainment Designed using HTML/CSS, and some features of JavaScript..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Designed Website csehub....<button a href="" class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's a Website for educational purposes for the students of Computer Science Engineerring, Designed using HTML/CSS, JavaScript, PHP and MySql Database...</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Desktop Assistant Kitty (Voice Based)....<button a href="" class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's my personal Desktop Assistant named Kitty. It takes voice command as input and give desired output. Designed using Python and it's various Modules..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Snake Game....<button class="btn"><a href="https://github.com/pkrahul93/snakegame.github.io/blob/master/snakegame.py">Browse</a></button></td>
        </tr>
        <tr>
            <td>It is a simple kids game like mobile snake-game dresigned using Python and it's Modules...</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Designed Website Birdsplanet....<button a href="" class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's a Website where anyone can get various kind of Bird's Images and their details, Designed using HTML/CSS, PHP and Mysql Database..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Designed Website Examcracker....<button a href="" class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's a Website for educational purpose designed using Wordpress and Elementor..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* My personal Notebook (iNote)....<button a href="" class="btn">Visit</button></td>
        </tr>
        <tr>
            <td>It's a Web-App like Crud-app for storing daily schedule. Designed using HTML/CSS, PHP and Mysql Database..</td>
        </tr>
        <tr>
            <td style="font-size: 30px; border-radius: 15px; height: 35px; padding-left: 12px; font-weight: bold; color: rgb(7, 7, 7); background-color: rgb(30, 210, 60);">* Realtime Chat App (Kitkat)....<button a href="" class="btn">Chat</button></td>
        </tr>
        <tr>
            <td>It's a realtime Chat app like facebook app designed using HTML/CSS, JavaScript, Node.js, PHP, MySql Database. For realtime masseging I used Socket.io....</td>
        </tr>
    </table>
    <br><br><br><br>
    <div class="footer">
        <h2>*...Copyright to &copy; iNote 2021...*</h2>
    </div>
</body>
</html>