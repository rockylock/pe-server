
<?php 
	
	// get the machine json file
	$machineData = file_get_contents("machines.json");

	// show it to the screen
	// var_dump($machineData);

	// initialize
	$name = "";
	$teaser = "";
	$manufacturer = "";
	$model = "";
	$status = "";
	$description = "";
	
	$nameLabel = "Name";

	$hasName = false;
	$nameError = false;

	/*

	If a user's submitted data, 
	and there's user input in the field, 
	we want to set and store that input. 
	Otherwise, we'll change the input label 

	if ( isset($_POST["submitted"]) ) {
		if ($_POST["name"]) {
			$name = $_POST["name"];
		} else {
			$nameLabel = "Please enter a name";
		}
	} 
	*/

	// video example
	if ( isset($_POST["submitted"]) ) {
		if ($_POST["name"]) {
			$name = $_POST["name"];
			
			// if the string length > 0, set $hasName to true
			// and create a new associative array
			if (strlen($name) > 0 ) {
				$hasName = true;

				// Create machine name
				$newMachine = [
					"name" => "$name",
				];

				//echo "<pre>";
				var_dump($newMachine);
				//echo "<pre>";
			}

			// Pull up JSON file

			$machineJson = json_encode($newMachine);

			// Save machine name

			file_put_contents("machines.json", $machineJson);

		} else {
			$nameLabel = "Please enter a name";
		}
	} 

	// Message creation

		$message = "Name: " . $name . "."; 

	// Message delivery
	function outputMessage($value) {
		if ( isset( $_POST["submitted"]) ) {
			echo $value;
		}
	}

 ?>


<inner-column>

	<form-page>
		<h1>Add a machine</h1>

		<form method="post">
			
				<field>
					<label><?=$nameLabel?></label>
					<input type="string" name="name" value="<?=$name?>"> <!-- required -->
				</field>

				<field class="manufacturer">
					<label>Manufacturer</label>
					<input type="string" name="manufacturer">
				</field>
			
				<field class="model">
					<label>Model</label>
					<input type="string" name="model">
				</field>
				
				<field class="teaser">
					<label>Teaser</label>
					<textarea name="teaser" rows ="2"></textarea>
				</field>

				<field class="description">
					<label>Description</label>
					<textarea name="description" rows="5"></textarea>
				</field>

				<fieldset>
				    <legend>Machine status</legend>

				    <input type="radio" name="status">
				    <label>Online</label> <br>

				    <input type="radio" name="status">		    
				    <label>Under maintenance</label> <br>

				    <input type="radio" name="status">
				    <label>Offline</label> <br>
			  </fieldset>

			  <fieldset>
				    <legend>Requirements</legend>

				    <input type="checkbox" name="certification">
				    <label>Requires certification</label> <br>

				    <input type="checkbox" name="supervision">		    
				    <label>Requires supervision</label> <br>
			  </fieldset>

			  <div class="button">
					<button type="submit" name="submitted">
						Submit
					</button>
				</div>

			<div class="message">
				<?php outputMessage($message); ?>	
			</div>

		</form>

	</form-page>

</inner-column>