<?php  include 'config.php';
if(isset($_POST['submit'])){
	$question_num = $_POST['question_num'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];

	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

	$insert = "INSERT INTO questions(`question_num`,`question_text`)
	 VALUES('$question_num','$question_text')";
	$result = mysqli_query($conn,$insert);
	
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			

				$insert = "INSERT INTO options(`question_num`,`is_correct`,`option`)
                VALUES ('$question_num','$is_correct','$value')";
				
				$insert_row = mysqli_query($conn,$insert);

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $insert);
					
				}

			}
		}
		$message = "Question has been added successfully";
	}

	




}

		$insert = "SELECT * FROM questions";
		$questions = mysqli_query($conn,$insert);
		$total = mysqli_num_rows($questions);
		$next = $total+1;
		

?>
<html>
<head>
	<title>PHP Quizer</title>
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
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
							<input type="number" name="question_num" value="<?php echo $next;  ?>">
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
						<input type="submit" name="submit" value ="submit">


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