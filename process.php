<?php include 'config.php'; ?>
<?php session_start(); ?>
<?php 
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_POST){
 	$insert = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$insert));
 	$number = $_POST['number'];
 	$selected_choice = $_POST['choice'];
 	$next = $number+1;
	
 	$insert = "SELECT * FROM options WHERE question_num = $number AND is_correct = 1";
 	 $result = mysqli_query($conn,$insert);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_choice = $row['id'];
	
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
 	 }
 
 	 if($number == $total_questions){
 	 	header("LOCATION: results.php");
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>