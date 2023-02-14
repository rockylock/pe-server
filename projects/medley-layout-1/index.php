<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Medley Layout 1</title>
		<meta name='description' content=' A practice layout using CSS Grid.'>
		<meta property='og:image' content='$todo'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>


	<body>
		<header>
			<!-- <h1 class='loud-voice'>Medley Layout 1</h1> -->
		</header>

		<main>

			<section class='page-section heading-2'>
				<inner-column>
					
					<heading-2>						
						<h2 class="attention-voice">Heading level 2 small</h2>

						<p class="calm-voice">This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</heading-2>

				</inner-column>
			</section>

			<section class="page-section heading-3">
				<inner-column>

					<?php include("modules/h3-grid.php"); ?>

				</inner-column>
			</section>

			<section class="page-section images">
				<inner-column>

					<?php include("modules/image-grid.php"); ?>

				</inner-column>
			</section>

		</main>

		<footer>
			<!-- <h2>Footer</h2> -->
		</footer>
	</body>

</html>