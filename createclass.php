<?php
 session_start();
$conn=mysqli_connect('localhost','root','','classroom') or die('could not connect to database');

$subject=$_POST['subject'];
$tname=$_POST['tname'];

$q="INSERT into class(subject,tname) values('$subject','$tname')";

$result=mysqli_query($conn,$q);

$q2="SELECT LAST_INSERT_ID() from class";

$result1=mysqli_query($conn,$q2);

$row=mysqli_fetch_array($result1);

$code=$row[0];
if($result)
{
 echo 'The class has been successfully created.<br>';
 echo 'Your class code is '.$code.'';
}
else
{
 echo 'Sorry, the class has not been created.';
}