
<!-- Machine card generator -->
<?php foreach($machineData as $machine) {  
	$image = $machine["image"];
	$name = $machine["name"];
	$teaser = $machine["teaser"];
?>

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

<?php } ?>















