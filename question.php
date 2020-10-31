<?php 
	include 'config.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$insert = "SELECT * FROM questions WHERE question_num = $number";

	// Get the question
	$result = mysqli_query($conn,$insert);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$insert = "SELECT * FROM options WHERE question_num = $number";
	$choices = mysqli_query($conn,$insert);
	// Get Total questions
	$insert = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$insert));
 	
	
?>
<html>
<head>
	<title>Quizer</title>
</head>
<body>

	<header>
		<div class="container">
			<p>Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<p class="question"><?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['option']; ?></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">


				</form>
				

			</div>

	</main>


	<footer>
			<div class="container">
				Copyright & Mehta
			</div>


	</footer>


</body>
</html>