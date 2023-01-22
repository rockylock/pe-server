
<!DOCTYPE html>

<?php require("router.php"); ?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DigiFab Machines | <?=$page?></title>

		<link rel="stylesheet" type="text/css" href="css/site.css">
	</head>

	<body class="<?=$page?>">

		<header>
			<inner-column>

				<section class="page-section site-header">
					<?php include("site-menu.php")?>
				</section>

			</inner-column>
		</header>

		<main>
		
		<?php getTemplate($page); ?>

		</main>

		<footer>
			<inner-column>

				<section class="page-section site-header">
					<p>&copy 2023 Miguel Vega. All rights reserved.</p>
				</section>

			</inner-column>	
		</footer>

	</body>
</html>













