<!-- 
Display information so that users can understand the form’s purpose. Include instructions if needed.

Provide a way for users to enter their response(s).

Provide clear input for users to submit their response(s).

Display error if no characters are present upon submission. Persist until user entry is valid.

Record characters the user entered into the field. This includes letters, numbers, special characters, and spaces (what else can users input?).

Use built-in function to determine the length of the string as an integer.

Display the initial string, as well as the character count in a single output. 
-->

<!-- what if the input field was a string/text, and we used floatval? -->

<?php 

// #1: Initialize
$userInput = "";
$characterCount = "";
$message = "";
$inputLabel = "Enter your information below.";

/*
If a user's submitted data, and there's user input in the field, 
we want to set and store that input. Otherwise, we'll set 
the input label to reinforce the behavior. 
*/

// isset submission, or prompt
if ( isset($_POST["submitted"]) ) {
	if ($_POST["userInput"]) {
		$userInput = $_POST["userInput"];
	} else {
		$inputLabel = "Enter information below, then submit.";
	}
}

// php character counter
$str = $userInput;

// message creation
$message = "You entered: " . "'" . $userInput . "'." . "<br>" . "Character count: " . strlen($str) . " characters in total.";

// Message delivery
// Change colors of text by class (class="initial"; class="error";)
function outputMessage($value) {
	if ( isset($_POST["submitted"]) ) {
		echo $value;
	} 	
}

 ?>

<div class="inner-column">

	<section class="info">
		<h1>Character Counter</h1>
		<h2>No fingers. No toes.</h2>
	</section>

	<form method="POST">
	 	
		<div class="field">
			<label for="userInput"><?=$inputLabel?></label>
			<input type="text" name="userInput" placeholder="Type here">
		</div>

		<button class="submit" name ="submitted">
			<p>Submit</p>
		</button>

		<button class="reset" name ="resetInput">
			<a href="?">Reset</a>
		</button>

	</form>

	<div class="output">
		<?=outputMessage($message)?>
	</div>

</div>

<!-- STYLING -->
 <style>
	
	* {
		box-sizing: border-box;
		margin: 0;
	}

	body {
		background-color: ghostwhite;
		padding: 10px;
	}

	.inner-column {
		max-width: 800px;
		margin-left: auto;
		margin-right: auto;
		background-color: #fcfafd;
		box-shadow: 0 5px 10px 5px rgba(0, 0, 0, 0.2);
		border-radius: 5px;
		padding: 10px;
	}

/* FORM */
	.field {
		display: grid;
		gap: 15px;
		margin-top: 20px;
	}

	form button {
		justify-self: start;
		margin-top: 10px;
	}

	form .emptyField {
		color: red;
	}

/*	OUTPUT */

	.output {
		margin: 20px 0 60px;
	}

/* LINKS */
	a {
		color: black;
		text-decoration: none;
	}

/* HEADINGS & TEXT */

h1, h2, p {
	font-family: helvetica, sans-serif;
}

h1 {
	font-size: 2.5rem;
	font-weight: 300;
}

h2 {
	font-size: 1.25rem;
	font-weight: 500;
	letter-spacing: 0.025rem;
	line-height: 1.3;
}

/* BUTTONS */
button {
	padding: 5px 10px;
	border-radius: 5px;
	gap: 10px;
}

button[class="submit"] {
	background-color: #729274;
	color: ghostwhite;
}

button[class="reset"] {
	background-color: #ef3e01;
	color: ghostwhite;
}
</style>



























