<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Classroom</title>
</head>

<body>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="topnav" id="myTopnav">
        <a href="selectclass-rohan.php" class="active">Select Class</a>
        <a href="createclass-shreyash.html">Create Class</a>
        <a href="quizzesmade-arjav.php">Quiz made</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <style>
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }
    </style>
<?php
    include 'db.php';
//session_start();
$username2=$_SESSION['username'];
//$subject=$_SESSION["subject"];
$q4="SELECT * from class WHERE username='$username2'";
$result3=mysqli_query($connection,$q4);
//mysqli_fetch_array($result3);
echo'hello';
if(mysqli_num_rows($result3) > 0){
while($row = $result3->fetch_assoc())
{
//$_SESSION['quizname']=$row['quizname'];
echo'<br><br><br><br><br><br>
<div id="mySidenav" class="sidenav">
        <form method="post" action="createquiz-rohan.php"  id="about">
       <input type="hidden" name="quizid" value='.$row['classcode'].'>
        <input type="submit" value='.$row['subject'].' name="class1">
        </form>';
    

}
}
?>
    
    <style>
        #mySidenav a {
            position: absolute;
            /* Position them relative to the browser window */
            left: -80px;
            /* Position them outside of the screen */
            transition: 0.3s;
            /* Add transition on hover */
            padding: 15px;
            /* 15px padding */
            width: 250px;
            /* Set a specific width */
            text-decoration: none;
            /* Remove underline */
            font-size: 30px;
            /* Increase font size */
            color: white;
            /* White text color */
            border-radius: 0 5px 5px 0;
            /* Rounded corners on the top right and bottom right side */
        }

        #mySidenav a:hover {
            left: 0;
            /* On mouse-over, make the elements appear as they should */
        }

        
        #about {
            top: 100px;
            background-color: #f44336;
        }

        #blog {
            top: 200px;
            background-color: #2196F3;
            /* Blue */
        }

        #projects {
            top: 300px;
            background-color: #4CAF50;
            /* Red */
        }

        #contact {
            top: 400px;
            background-color: #555
                /* Light Black */
        }
    </style>
</body>

</html>