
<?php include("machine-data.php"); ?>

<?php 

	if ( isset($_GET["machine"]) ) {
		$target_machine_id = $_GET["machine"];
	}	

	// echo $target_machine_id;

	// If we find a matching machine ID in our data
	foreach ($machineData as $machine) {
		if ( $target_machine_id == $machine["id"] ) {
			$detail = $machine;
		}
	}

 ?>

<inner-column>	
	
	<detail>
		<?php if ( isset($detail) ) { ?>

			<h1><?=$detail["name"]?></h1>
			<h2><?=$detail["manufacturer"]?></h2>
			<h3><?=$detail["model"]?></h3>

		<?php } else { ?>

			<h1>Machine not found.</h1>
			<a href="?page=list">Back to machines</a>

		<?php } ?>
	</detail>

</inner-column>