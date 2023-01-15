
<?php  

$formLinks = [
	[
		"url" => "character-counter.php",
		"name" => "Character Counter"
	],
	[
		"url" => "simple-math.php",
		"name" => "Simple Math"
	],
	[
		"url" => "printing-quotes.php",
		"name" => "Printing Quotes"
	],
	[
		"url" => "workshop-materials.php",
		"name" => "Workshop Materials"
	],
	[
		"url" => "berry-party.php",
		"name" => "Berry Party"
	]
]

?>

<section class="forms-list"></section>

	<div class="forms">
		<ul>
			<?php foreach ($formLinks as $formLink) { ?>
				<li>
					<a href="<?=$formLink["url"]?>"><?=$formLink["name"]?></a>
				</li>
			<?php } ?>		
		</ul>
	</div>

</section>