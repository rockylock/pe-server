
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Madlib PHP | Miguel</title>

	</head>

	<body>

		<main>

			<?php
				$pluralNounOne = "cars";
				$pluralNounTwo = "books";
				$verb = "help";
				$noun = "supermarket";
				$verbing = "swimming";
				$pluralNounThree = "chips";
				$nounTwo = "waffle";
				$pluralNounThree = "bottlecaps";

				echo "<p>" . " When I go to the arcade with my " . $pluralNounOne . " there are lots of games to play. I spend lots of time there with my friends. In the game X-Men you can be different " . $pluralNounTwo . ". The point of the game is to " . $verb . " every robot. You also need to save people. Then you can go to the next level. </p>";
			?>
				
				<p>In the game Star Wars you are Luke Skywalker and you try to destroy every <?php echo $noun;?>. In a car racing/motorcycle racing game you need to beat every computerized vehicle that you are <?php echo $verbing;?> against.</p>

				<p>There are a whole lot of other cool games. When you play some games you win <?=$pluralNounThree?> for certain scores. Once you're done you can cash in your tickets to get a big <?=$nounTwo?>. You can save your <?=$pluralNounThree?> for another time. When I went to this arcade I didn't believe how much fun it would be. So far I have had a lot of fun every time I've been to this great arcade!</p>

		</main>
	</body>
</html>