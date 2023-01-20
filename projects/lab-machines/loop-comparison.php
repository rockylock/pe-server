<!-- Old, works -->
<!-- Bring in data -->
<?php include("machine-data.php"); ?>

<!-- Machine card generator -->
<?php foreach($machineData as $machine) {  
	$image = $machine["image"];
	$name = $machine["name"];
	$teaser = $machine["teaser"];
?>

<machine-card>
	<picture>
		<img src="<?=$image?>">
	</picture>
	
	<card-text>
		<h2 class="name"><?=$name?></h2>
		<p class="teaser"><?=$teaser?></p>
		<a href="?page=detail&machine=<?=$machine["id"]?>">Learn more</a>
	</card-text>	
</machine-card>

<?php } ?>


<!-- New, breaks -->
<?php include("machine-data.php"); ?>

<?php 

	 $image = $machineData["image"];
	 $name = $machineData["name"];
	 $teaser = $machineData["teaser"];

?>
<!-- Machine card generator -->

<ul>
	<?php foreach($machineData as $machine) { ?>
		<li>
				<machine-card>
					<picture>
						<img src="images/<?=$image?>">
					</picture>
					
					<card-text>
						<h2 class="name"><?=$name?></h2>
						<p class="teaser"><?=$teaser?></p>
						<a href="?page=detail&machine=<?=$machine["id"]?>">Learn more</a>
					</card-text>	
				</machine-card>
		</li>
	<?php } ?>
</ul>





























