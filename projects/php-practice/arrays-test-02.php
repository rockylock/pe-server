
<header style="font-size: 20px">

<style>
	
	monster-card {
		display: block;
	}

</style>

<!-- Pizza recipe function -->

<!-- 
<?php  

	function pizza($crust, $sauce, $topping1, $topping2) {
		echo "<h2>Order</h2>";
		
		echo "<ol>";
			echo "<li>" . $crust . " crust.</li>";
			echo "<li>" . $sauce . " sauce.</li>";
			echo "<li>" . $topping1 . ".</li>";
			echo "<li>" . $topping2 . ".</li>";
		echo "</ol>";
	}

	pizza("Thin", "Tomato", "Cheese", "Pepperoni");
	pizza("Thick", "Tomato", "Sausage", "Mushrooms");
	pizza("Deep dish", "Tomato", "Olives", "Pineapples");

 ?> 
-->

<!-- Monster generator -->

<?php 

	function monsterGenerator($name, $age, $favoriteFood, $favoriteColor) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood,
			"favoriteColor" => $favoriteColor,
		];

		return $monster;
	}

	$crunchy = monsterGenerator("Crunchy", 6, "Pizza", "Blue");
	$crispy = monsterGenerator("Crispy", 2, "Soup", "Yellow");
	$chunky = monsterGenerator("Chunky", 3, "Baked Potatoes", "Orange");
	$hank = monsterGenerator("Hank", 7, "Peeps", "Pink");

	$monstersArray = [$crunchy, $crispy, $chunky, $hank];

?>

<?php foreach ($monstersArray as $monster) { ?>

	<ul>
		<li class="monster">
			<monster-card>
				<h2 class="name"><?=$monster["name"]?></h2>
				<p class="age"><?=$monster["age"]?></p>
				<p class="favoriteFood"><?=$monster["favoriteFood"]?></p>
				<p class="favoriteColor"><?=$monster["favoriteColor"]?></p>
			</monster-card>
		</li>
	</ul>

<?php } ?>

</header>

















