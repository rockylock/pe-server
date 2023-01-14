
<?php 

//initialize, set defaults
$users = 0;
$ply = 0;


if ( isset($_POST["submitted"]) ) {  // check if data was submitted

	if ( isset($_POST["users"]) ) {   // check if data was submitted
		if ( $_POST["users"] >= 0 ) {  // check if data was submitted
			$users = $_POST["users"];   // organize data for later use
		}
	}

	if ( isset($_POST["ply"]) ) {    // check if data was submitted
		if ( $_POST["ply"] >= 0 ) {	// check if data was submitted
			$ply = $_POST["ply"];		// organize data for later use
		}
	}

	$totalPly = floatval($users) * floatval($ply);  //convert string to float

	echo "<p class='feedback'>$totalPly pieces of plywood will be needed.</p>";

	// echo var_dump($_POST);

}

?>

<form method="POST">

	<p>Calculating project materials</p>

	<div class="field">
		<label>Number of users</label>
		<input type="number" name="users" value="<?=$users?>">
	</div>

	<div class="field">
		<label>Pieces of plywood per user</label>
		<input type="number" name="ply" value="<?=$ply?>">
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>

</form>	

