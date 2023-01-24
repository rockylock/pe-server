
<?php include("router.php")?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Theming Challenge | <?=$page?></title>
		<meta name="description" content="This is a Theming Challenge, where we work to replicate a provided mock site layout.">
		
		<link rel="stylesheet" href="css/site.css">
		
		<!-- Open Graph Image -->
		<!-- <meta property="og:image" content="[[insert meta image source]]">
		<meta property="og:image:secure_url" content="[[insert meta image source]]">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:image:alt" content="[[insert OG image alt content]]"> -->
	</head>

	<body class="<?=$page?>">

		<header>
			<inner-column>

				<?php include("header.php")?>

			</inner-column>
		</header>

		<main> 
		
		<?php getTemplate($page)?>

		</main>	

		<footer>
			<inner-column>

				<?php include("footer.php")?>

			</inner-column>	
		</footer>
	</body>
</html>













