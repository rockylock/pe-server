
<?php 

//initialize, set defaults
	$users = 0;
	$ply = 0;

	$dump = $_POST;

	if ( isset($_POST["submitted"]) ) { // check if data was submitted
		
		if ( isset($_POST["users"]) ) { // check if data was submitted
			if ( $_POST["users"] >= 0 ) { // check if data >= 0
				$users = $_POST["users"];  // organize data for later use
			}
		}

		if ( isset($_POST["ply"]) ) {
			if ( $_POST["ply"] >= 0 ) {
				$ply = $_POST["ply"];
			}
		}

		$totalPly = floatval($users) * floatval($ply);

		if($totalPly == 1) {
			$piece = "piece";
		} else {
			$piece = "pieces";
		}

		$message = "<p class='feedback'>$totalPly plywood $piece will be needed for the workshop.</p>";
	}

	// var_dump($dump);

?>
<div class="inner-column">
	<form method="POST">

		<h1>Workshop Materials</h1>

		<div class="field">
			<label>Users attending workshop:</label>
			<input type="number" name="users" min="0" value="<?=$users?>"/>
		</div>

		<div class="field">
			<label>Plywood pieces per user:</label>
			<input type="number" name="ply" min="0" value="<?=$ply?>">
		</div>

		<button type="submit" name="submitted">Submit</button>

	</form>

<?php 

	if( isset($_POST["submitted"]) ) {
		echo $message;
	}

 ?>
</div>













