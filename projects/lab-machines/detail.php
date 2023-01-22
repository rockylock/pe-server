
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
	
	<detail-card>
		<?php if ( isset($detail) ) { ?>
			<picture>
				<img src="images/<?=$detail["image"]?>">
			</picture>

			<detail-heading class="heading">
				<h1 class="name"><?=$detail["name"]?></h1>
				<h2 class="manufacturer"><?=$detail["manufacturer"]?></h2>
				<h2 class="model"><?=$detail["model"]?></h2>
				<p class="status"><?=$detail["status"]?></p>
			</detail-heading>

			<detail-text class="info">
				<p class="description"><?=$detail["description"]?></p>
				<a href="?page=list" class="link">Back to machines</a>
			</detail-text>

		<?php } else { ?>

			<h1 class="error">Machine not found.</h1>
			<a href="?page=list" class="link">Back to machines</a>

		<?php } ?>
	</detail-card>

</inner-column>