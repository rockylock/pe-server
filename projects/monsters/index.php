
<!-- HEADER -->

<?php 

include "header.php";

?>

<div class="inner-column">

	<?php 


	// MONSTER DETAILS
	$reads = [
		"portrait" => "images/miss-reads-a-lot.jpg",
		"id" => 5024,
		"name" => "Miss Reads-a-Lot",
		"favoriteFood" => "madeleines",
		"age" => 20, 
		"adopted" => false,
	];

	$codey = [
		"portrait" => "images/codey.jpg",
		"id" => 5057,
		"name" => "Codey",
		"favoriteFood" => "blueberries",
		"age" => 8, 
		"adopted" => true,
	];

	$limabean = [
		"portrait" => "images/limabean.jpg",
		"id" => 4998,
		"name" => "Limabean",
		"favoriteFood" => "churros",
		"age" => 1,  // add if/else for singular/plural. ex: 1 year old vs 2 years old.
		"adopted" => false,
	];

	$fragoo = [
		"portrait" => "images/fragoo.jpg",
		"id" => 5010,
		"name" => "Fragoo",
		"favoriteFood" => "Ragu sauce",
		"age" => 80, 
		"adopted" => true,
	];

	$banana = [
		"portrait" => "images/mr-banana.jpg",
		"id" => 5017,
		"name" => "Mr. Banana",
		"favoriteFood" => "plantains",
		"age" => 367, 
		"adopted" => true,
	];

	$orangina = [
		"portrait" => "images/orangina.jpg",
		"id" => 5073,
		"name" => "Orangina",
		"favoriteFood" => "dirt",
		"age" => 7, 
		"adopted" => false,
	];

	$shadow = [
		"portrait" => "images/shadow.jpg",
		"id" => 5006,
		"name" => "Shadow",
		"favoriteFood" => "fireflies",
		"age" => 4, 
		"adopted" => false,
	];

	// NAME LIST
	$monstersArray = [$codey, $limabean, $reads, $fragoo, $banana, $orangina, $shadow];

	echo "<ol>";

	foreach ($monstersArray as $monster) {
		$portrait =$monster["portrait"];
		$name = $monster["name"];
		$id = $monster["id"];
		$favoriteFood = $monster["favoriteFood"];
		$age = $monster["age"];
		$adopted = $monster["adopted"];

		$story = "My favorite food is " . $favoriteFood . " and I'm " . $age . " years old.";

		if ($adopted == 1) {
			$adopted = "Adopted!";
		} else {
			$adopted = "Still looking for a home!";
		}

		echo "<li class='monster'>"; 

		echo 
			"<monster-card id='" . $id . "'>" .
				"<picture class='portrait'>" . 
					"<img src='" . $portrait . "'>" .
				"</picture>" .

				"<section class='monster-details'>" .
					"<h2 class='name'>" . $name . "</h2>" .

					"<p class='story'>" . $story . "</p>"  .
					"<p class='adopted'>" . $adopted . "</p>" .
				"</section>";
			"</monster-card>";
		
		echo "</li>";
	}

	echo "</ol>";

	?>

</div>	

<!-- FOOTER -->




















