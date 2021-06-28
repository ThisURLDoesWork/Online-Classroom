<?php  include 'db.php';
//session_start();
$i=1;
//$_SESSION["subject"]//=$_POST['nu'];
if(isset($_POST['submit'])){

	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];

	$username1=$_SESSION['username'];
	$quizsubject=$_SESSION["subject"];
	$q7="SELECT LAST_INSERT_ID() from quiz";
	//echo''.$q7.'';
	$r8=mysqli_query($connection,$q7);
	//$result1=mysqli_query($conn,$r8);

$row=mysqli_fetch_array($r8);

//$code=$row[0];
//$code1=$row[1];
//	echo'code:'.$code.'<br>';
//	echo'code1:'.$code1.'<br>';
//	$q9="SELECT quizname from quiz where quizid='$code'";
//	$r9=mysqli_query($connection,$q9);
	$correct_choice = $_POST['correct_choice'];
	echo ''.$quizsubject.' hello';
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

 // First Query for Questions Table

	$query = "INSERT INTO questions (";
	$query .= "tname,quizname,quizid,quizsubject,question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$username1}','{$quizsubject}','{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);

	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
//Second Query for Choices Table
			$query1 = "INSERT INTO options (";
				$query1 .= "tname,quizname,quizid,question_number,is_correct,coption)";
				$query1 .= " VALUES (";
				$query1 .=  "'{$username1}','{$quizsubject}','{$question_number}','{$is_correct}','{$value}' ";
				$query1 .= ")";

				$insert_row = mysqli_query($connection,$query1);
				// Validate Insertion of Choices

				if($insert_row){
					//$i++;
					//header("LOCATION: add.php");
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);

				}

			}
		}
		$message = "Question has been added successfully";
	}






}

		$query = "SELECT * FROM questions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;


?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="container">

		</div>
	</header>

	<main>
			<div class="container">
				<h2>Add A Question</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>

				<form method="POST" action="add.php">
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label>Question Text:</label>
							<input type="text" name="question_text">
						</p>
						<p>
							<label>Choice 1:</label>
							<input type="text" name="choice1">
						</p>
						<p>
							<label>Choice 2:</label>
							<input type="text" name="choice2">
						</p>
						<p>
							<label>Choice 3:</label>
							<input type="text" name="choice3">
						</p>
						<p>
							<label>Choice 4:</label>
							<input type="text" name="choice4">
						</p>
						<p>
							<label>Choice 5:</label>
							<input type="text" name="choice5">
						</p>
						<p>
							<label>Correct Option Number</label>
							<input type="number" name="correct_choice">
						</p>
						<input type="hidden" name="nu1" value="<?php echo $_SESSION["subject"]; ?>">
						
						<input type="submit" class="button" name="submit" value ="submit">


				</form>
			</div>

	</main>


	<footer>



	</footer>








</body>
</html>
