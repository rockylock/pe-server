
<?php 

	$users = 0;
	$ply = 0;

	if ( isset($_POST["submitted"]) ) {
		
		if ( isset($_POST["users"]) ) {
			if ( $_POST["users"] >= 0 ) {
				$users = $_POST["users"];
			}
		}

		if ( isset($_POST["ply"]) ) {
			if ( $_POST["ply"] >= 0 ) {
				$ply = $_POST["ply"];
			}
		}

		$totalPly = floatval($users) * floatval($ply);

		echo "<p class='feedback'>$totalPly plywood pieces will be needed for the workshop.</p>";
	}

	// var_dump($stuff);

?>

<form method="POST">

	<h1>Workshop materials</h1>

	<div class="field">
		<label>Users attending workshop:</label>
		<input type="number" name="users" min="0" value="<?=$users?>">
	</div>

	<div class="field">
		<label>Plywood pieces per user:</label>
		<input type="number" name="ply" min="0" value="<?=$ply?>">
	</div>

	<button type="submit" name="submitted">Submit</button>

</form>


















