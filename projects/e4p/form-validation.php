<?php

// Initialize  ("variables")
$width = null; // defaults
$height = null;
$squareFootage = 0;
$message = "";

$widthValidationMessage = "";
$heightValidationMessage = "";


// Possible input (where the form data is actually used)
$formSubmitted = isset($_POST["submitted"]);

if ($formSubmitted) {

	if ( $_POST["width"] ) {
		$width = $_POST["width"];
	} else {
		$widthValidationMessage = "You must enter a width.";
	}

	if ( $_POST["height"] ) {
		$height = $_POST["height"];
		if ($height < 2) {
			$heightValidationMessage = "Really dude...";
		}
	} else {
		$heightValidationMessage = "You must enter a height TEST.";
	}
}


function validationMessage($value) {
	if ($value) {
		return "<p class='error'>$value</p>";
	} // can save you trouble repeating this so much in the template!
} 


// Calculations (often happen with or without input)
$squareFootage = floatval($width) * floatval($height);

if ($width && $height) { // only show them the message if it make sense
	$message = "Your room is $squareFootage feet square.";
}

?>

				<!-- input (But just visually out of order!) -->
				<a href="?">
					<h1>Square footage</h1>
				</a>

				<form method="POST">
					<div class="field">
						<label for="w">Width (in ft)<span style='color:red'>*</span></label>
						<input id="w" type="number" name='width' value="<?=$width?>" placeholder=''>
						<?=validationMessage($widthValidationMessage)?>
					</div>

					<div class="field">
						<label for="h">Height <span style='color:red'>*</span></label>
						<input id="h" type="number" name='height' value="<?=$height?>" placeholder='integer'>
						<?=validationMessage($heightValidationMessage)?>
					</div>

					<button type='submit' name='submitted'>
						Submit
					</button>
				</form>


<!-- ouput -->
<?php if ($message) { ?>
	<p><?=$message?></p>
<?php } ?>



	<style>
		form {
			display: grid;
			gap: 20px;
			max-width: 300px;
		}

		form .field {
			display: grid;
		}

		form 	.error {
			font-size: 1em;
			color: red;
			margin: 0;
		}

		form input[type='number'] {
			font: inherit;
			padding: .5em 1em;
		}

		form button[type='submit'] {
			justify-self: start;
		}

	</style>
