
<?php 
	
	// initialize
	$name = null;
	$teaser = "";
	$manufacturer = "";
	$model = "";
	$status = "";
	$description = "";

	$nameLabel = "Name";

	if ( isset($_POST["submitted"]) ) {
		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];
		} else $nameLabel = "Error";
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

				<field class="descriptio">
					<label>Description</label>
					<textarea name="description" rows="5"></textarea>
				</field>

				<fieldset>
				    <legend>Current machine status</legend>

				    <input type="radio" name="status">
				    <label>Online</label> <br>

				    <input type="radio" name="status">		    
				    <label>Under maintenance</label> <br>

				    <input type="radio" name="status">
				    <label>Offline</label> <br>
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