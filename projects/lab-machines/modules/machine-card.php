
<!-- 
$m001 = [
	"image" = "../images/square.jpg",
	"name" = "Vinyl Cutter",
	"teaser" = "Cut thin materials to make stickers, heat-transfer designs for shirts, and more!"
]
-->

<!-- Bring in data -->
<?php include("machine-data.php")?>

<!-- Machine card generator -->
<?php foreach($machinesArray as $machine) {  
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
	</card-text>	
</machine-card>

<?php } ?>


