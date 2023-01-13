
<?php 
/*
“Create a program that prompts for a quote and an author. Display the quotation and author as “Author says, ‘Quotation.’” 
*/

$quote = null;
$author = null;
$message = "";

$noQuoteMessage = "";
$noAuthorMessage = "";

/*
If form submitted
	check if quote entered. 
	If so, set $quote to input.
	Otherwise, set to no quote.

	Repeat for author.
*/

if ( isset($_POST["submitted"]) ) {
	if ( $_POST["quote"] ) {
		$quote = $_POST["quote"];
	} else {
		$noQuoteMessage = "Please enter a quote.";
	} 

	if ( $_POST["author"] ) {
		$author = $_POST["author"];
	} else {
		$noAuthorMessage = "Please enter the author's name.";
	}
}

// If no quote and/or no author are entered, display error message.
function validationMessage($value) {
	if ($value) {
		return "<p class='emptyField'>$value</p>";
	}
}

//if both quote and author have been entered, set message to string.
if ($quote && $author) {
	$message = $author . " says, '" . $quote . ".'";
}

?>

<div class="inner-column">
	<a href="?">
		<h1>Quote Printer</h1>
	</a>

	<form method="POST">
		
		<div class="field">
			<label for="quote">Add your quote.</label>
			<input type="text" name="quote" placeholder="Enter quote here" value="<?=$quote?>">
			<?=validationMessage($noQuoteMessage)?>
		</div>

		<div class="field">
			<label for="author">Add the author's name.</label>
			<input type="text" name="author" placeholder ="Enter name here" value="<?=$author?>">
			<?=validationMessage($noAuthorMessage)?>
		</div>

		<button class="submit" name="submitted">
			<p>Submit</p>
		</button>

	</form>

	<div class="output">
		<p><?=$message?></p>
	</div>
</div>


<style>
	
	* {
		box-sizing: border-box;
		margin: 0;
	}

	body {
		background-color: #bbe1f4;
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

	.field {
		display: grid;
		gap: 5px;
		margin-top: 20px;
	}

	form button {
		justify-self: start;
		margin-top: 10px;
	}

	.output {
		margin: 20px 0 60px;
	}

	a {
		color: black;
		text-decoration: none;
	}

	form .emptyField {
		color: red;
	}

</style>


























