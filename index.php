<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Online Quizer</title>
			<link rel="stylesheet" type="text/css" href="style.css"
	<link rel="icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
		</header>
		<div class="top">
			<img class="topcloud"src="cloud.png" alt="cloud img">


			<h1 >Quiz</h1><br>


		</div>
		<div class="bottom">
			<img class="topcloud"src="cloud.png" alt="cloud img">
		</div>

	    <div class = "menu">

</html>
<?php
 //session_start();
include 'db.php';
$_SESSION["quizname"]=$_POST['qn'];
$quizname=$_SESSION["quizname"];
$quizsubject=$_SESSION["subject"];
$username=$_SESSION['username'];
echo''.$quizname.'';
echo''.$quizsubject.'';
echo'<br>'.$username.'<br>';
$q3="SELECT * FROM quiz ";
if(mysqli_query($connection,$q3))
{
	echo'executed sucessfully';
}
else
{
	echo'unsucessfullt';
}

$c=mysqli_query($connection,$q3);
$count=mysqli_num_rows($c);
echo'<br>'.$count.'<br>';
$count=$count+1;
$q2="INSERT INTO quiz (tname,quizid,quizname,quizsubject) values ('$username','$count','$quizname','$quizsubject')";
//echo'<br>'.mysqli_query($connection,$q3).'<br>';
if(mysqli_query($connection,$q2))
{
	echo'inserted sucessfully';
}
else
{
	echo'failed';
}
//$_SESSION["subject"]=$_POST['class1'];
//echo''.$_SESSION["subject"].'';                 where quizsubject='$quizsubject'
?>
<html>
<form method="post" action="add.php" >
<input type="hidden" name="nu" value="<?php echo''.$_SESSION["subject"].''; ?>">
<input class=button type="submit" value="add questions" name="su">
</form>
		
	</div>
    <img src="mountain.png" alt="mountain img">


	</body>
</html>
