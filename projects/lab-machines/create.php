
<?php 

	if ( isset($_POST["submitted"]) ) {
		//echo "You entered the following: <br>" . $_POST["name"]; 	
	}

 ?>


<inner-column>

	<form-page>
		<h1>Add a machine</h1>

		<form method="post">
			
			<div class="form-section">	
				<field>
					<label>Name</label>
					<input type="string" name="name" required>
				</field>
			
				<field>
					<label>Teaser</label>
					<textarea name="description" columns="35" rows ="2"></textarea>
				</field>
			</div>

			<div class="form-section">	
				<field>
					<label>Manufacturer</label>
					<input type="string">
				</field>
			
				<field>
					<label>Model</label>
					<input type="string">
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

		</form>
	</form-page>

</inner-column>