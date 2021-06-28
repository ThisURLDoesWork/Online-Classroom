<?php
include'db.php';
$username3=$_SESSION['username'];
$quizname1=$_POST['quizid'];
$q5="SELECT * from questions where quizid='$quizname1'";
$r3=mysqli_query($connection,$q5);

echo'hellp';
echo'<br>'.$username3.'';
echo'<br>'.$quizname1.'';
if(mysqli_num_rows($r3) > 0){
	echo'QUESTION';
while($row2 = $r3->fetch_assoc())
{
//while($row2=mysqli_fetch_row($r3))
//echo'inside while loop';
	
	echo '<br>'.$row2['question_text'].'<br>';
	$qno=$row2['question_number'];
$q6="SELECT * from options where tname='$username3' and quizid='$quizname1' and ";
$q6.="question_number='$qno'";
$r4=mysqli_query($connection,$q6);

if(mysqli_num_rows($r3) > 0){

while($row3 = $r4->fetch_assoc())
{
echo'OPTIONS';
echo '<br> '.$row3['coption'].'<br>';

}}
}
}	//while($row3 = $r4->fetch_assoc())
//{
//echo''.$row3['coption'].'';
//}
//echo $question['question_text']; //where tname='$username3' and quizid='$quizname1
?> 