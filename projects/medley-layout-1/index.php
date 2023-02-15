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
			<inner-column>

				<h1 class='loud-voice'>Medley Layout 1</h1>

			</inner-column>
		</header>

		<main>

			<section class='page-section grid-medley'>
				<inner-column>
					
					<grid-module>
						<heading-2>						
							<h2 class="attention-voice">Heading level 2</h2>

							<p class="calm-voice">This is some body text. This is some body text. This is some body text. This is some body text.</p>
						</heading-2>

						<?php include("modules/h3-grid.php"); ?>

						<?php include("modules/image-grid.php"); ?>
					</grid-module>

				</inner-column>
			</section>

		</main>

		<footer>
			<inner-column>

				<p><?php echo date('Y'); ?> Miguel Vega</p>
				
			</inner-column>
		</footer>
	</body>

</html>