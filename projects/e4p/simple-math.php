
<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
		initial-scale=1">

		<meta name="description" content="A simple math form, made to learn more about forms and PHP.">		
		<link rel="stylesheet" href="css/style.css">

		<title>Simple Math Form</title>

		<link rel="shortcut icon" href="favicon.ico">

		<meta name="google" content="notranslate"> 
	</head>
		
	<body>
		<?php 
			/*
			Challenge from 'Exercise for Programmers' (Chapter 2, Exercise 5):
 			Write a program that prompts for two numbers. 
 			Print the sum, difference, product, and quotient of those numbers.
 			*/

 			//initialize
 			$userInputOne = null;
 			$userInputTwo = null;
 			$inputLabelOne = "Enter your first number";
 			$inputLabelTwo = "Enter your second number";

 			$numberOne = floatval($userInputOne);
 			$numberTwo = floatval($userInputTwo);

			if ( isset($_POST["submitted"]) ) {
 				if ( isset($_POST["userInputOne"]) ) {
 					$numberOne = $_POST["userInputOne"];
 				} else {
 					$inputLabelOne = "Please enter a number, then Submit.";
 				}
 				if (isset($_POST["userInputTwo"]) ) {
 					$numberTwo = $_POST["userInputTwo"];
 				} else {
 					$inputLabelTwo = "Please enter a number, then Submit.";
 				}
 			}

 			$addition = $numberOne + $numberTwo;
 			$subtraction = $numberOne - $numberTwo;
 			$multiplication = $numberOne * $numberTwo;
 			//$division = $numberOne / $numberTwo; Fatal error, breaks everything

 			// Divide by 0
 			if ($numberTwo == 0) {
 				$division = null;
 				$division = "Undefined; you cannot divide by 0.";
 			} else {
 				$division = $numberOne / $numberTwo;
 			}

 			$messageOutput = "What is the first number? " . $numberOne . "<br>What is the second number? " . $numberTwo . "<br>" . $numberOne . " + " . $numberTwo . " = " . $addition . "<br>" . $numberOne . " - " . $numberTwo . " = " . $subtraction . "<br>" . $numberOne . " x " . $numberTwo . " = " . $multiplication . "<br>" . $numberOne . " / " . $numberTwo . " = " . $division;
		?>

		<div class="inner-column">

			<form method="POST">
				<h1>Simple Math Calculator</h1>
				
				<form-field>
					<label for="userInputOne" ><?=$inputLabelOne?></label>
					<input type="number" name="userInputOne" placeholder="Type here">
				</form-field>

				<form-field>
					<label for="userInputTwo" ><?=$inputLabelTwo?></label>
					<input type="number" name="userInputTwo" placeholder="Type here">
				</form-field>

				<button class="submit" name="submitted">
					<p>Submit</p>
				</button>
			</form>

			<div class="output">
				<p><?=$messageOutput?></p>
			</div>
		</div>
	</body>
</html>














