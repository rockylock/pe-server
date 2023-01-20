
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
			
			<div class="form-section">	
				<field>
					<label><?=$nameLabel?></label>
					<input type="string" name="name" value="<?=$name?>"> <!-- required -->
				</field>
			
				<field>
					<label>Teaser</label>
					<textarea name="teaser" columns="35" rows ="2"></textarea>
				</field>
			</div>

			<div class="form-section">	
				<field>
					<label>Manufacturer</label>
					<input type="string" name="manufacturer">
				</field>
			
				<field>
					<label>Model</label>
					<input type="string" name="model">
				</field>
			</div>
				
			<div class="form-section">	
				<field>
					<label>Description</label>
					<textarea name="description" columns="35" rows ="5"></textarea>
				</field>
			</div>

			<div class="form-section">	
				<fieldset>
				    <legend>Current machine status</legend>

				    <input type="radio" name="status">
				    <label>Online</label> <br>

				    <input type="radio" name="status">		    
				    <label>Under maintenance</label> <br>

				    <input type="radio" name="status">
				    <label>Offline</label> <br>
			  </fieldset>

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