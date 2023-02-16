<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Medley Layout 2</title>
		<meta name='description' content=' A practice layout using CSS Grid.'>
		<meta property='og:image' content='$todo'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

	<body>
		<header>
			<inner-column>

				<h1 class='loud-voice'>Medley Layout 2</h1>

			</inner-column>
		</header>

		<main>

			<section class="page-section article-intro">
				<inner-column>

					<?php include("modules/intro-module/template.php"); ?>

				</inner-column>
			</section>

			<section class='page-section articles'>
				<inner-column>
					
					<?php include("modules/article-module/template.php"); ?>

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