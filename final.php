<?php 

session_start();

?>

<html>
<head>

	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    body {
        background-color: #E6E6FA;
        color: white;
    }
    h1 {
    color: rgb(0, 255, 179);
  }

    .container-final {
        text-align: center;
        text-shadow: 2px 2px 5px rgb(0, 238, 255);
        font-size: 25px;
    }
    .background{
    overflow-y: scroll;

            background-repeat: no-repeat;
            background-size: cover;
background-image: url('https://www.leadquizzes.com/wp-content/uploads/2019/02/New-blog-graphic.jpg');

        }
    </style>
<body class="background">

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
			<div class="container-final">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; IT SERIES TUTOR
			</div>


	</footer>








</body>
</html>