<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Classroom</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!--Get your code at fontawesome.com-->

</head>

<body>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="topnav" id="myTopnav">
        <a href="selectclass-rohan.html" class="active">Select Class</a>
        <a href="createclass-shreyash.html">Create Class</a>
        <a href="quizzesmade-arjav.html">Quiz made</a>
        <a href="create-assignment-rohan.html">Assignment made</a>
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

        p {
            text-align: center;
            font-size: 24px;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #4CAF50;
        }

        .button2 {
            background-color: #f44336;
        }
    </style>
    <form method="post" action=index.php>
    
    <i class="fas fa-band-calendar-alt"></i>
<?php
session_start();
$_SESSION["subject"]=$_POST['class1'];
echo''.$_SESSION["subject"].'';

?>

    <p><br /><br /><br /><br />
        Enter quizname:<input type="text" name="qn">
        <br /><br /><br />
         </p>
    <br/><br/><br/>
    <input type="submit"  class="button button1">create quiz</button>
    </form>
   
</body>

</html>