<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 76px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.button {
  border: none;
  color: white;
  padding: 15px 140px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 32px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #ff0000;}/*red*/
.button4 {background-color: #ffa500;}/*orange*/
</style>
</head>
<body>

<ul>
  <li><a href="selectclass-rohan.html">Select class</a></li>
  <li><a href="createclass-shreyash.html.">Create Class</a></li>
  <li><a class="quizzesmade-arjav.html">Quizzes made</a></li>   
  <li><a href="create-assignment-rohan.html">Assignments made</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
  <h1>Quizzes made by you will appear here.</h1>
  
  <h2>Click on the quiz to open it.</h2>
  
<?php
include 'db.php';
//session_start();
$username2=$_SESSION['username'];
//$subject=$_SESSION["subject"];
$q4="SELECT * from quiz WHERE tname='$username2'";
$result3=mysqli_query($connection,$q4);
//mysqli_fetch_array($result3);
echo'hello';
if(mysqli_num_rows($result3) > 0){
while($row = $result3->fetch_assoc())
{
//$_SESSION['quizname']=$row['quizname'];
echo'<br><br><br><br><br><br>
<form method="post" action="display.php">
<input type="hidden" name="quizid" value='.$row['quizid'].'>
<input type="submit" value='.$row['quizname'].' name="qz">
</form> '; 
//echo'<br>'.$row['quizname'].'<br>';

}
}
?>  

<button class="button button1">quiz1</button><br/>
</div>

</body>
</html>