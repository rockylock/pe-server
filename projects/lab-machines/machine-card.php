
<?php include("machine-data.php"); ?>

<!-- Machine card generator -->

<!-- <ul> -->
	<?php foreach($machineData as $machine) {
		$image = $machine["image"];
		$name = $machine["name"];
		$teaser = $machine["teaser"]; 
	 ?>
		<!-- <li> -->
				<machine-card>
					<picture class="image">
						<img src="images/<?=$image?>">
					</picture>
					
					<card-text>
						<h2 class="name"><?=$name?></h2>
						<p class="teaser"><?=$teaser?></p>
						<a href="?page=detail&machine=<?=$machine["slug"]?>">Learn more</a>
					</card-text>	
				</machine-card>
		<!-- </li> -->
	<?php } ?>
<!--  </ul> -->















