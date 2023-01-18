
<!DOCTYPE html>

<?php include("machine-data.php"); ?>

<?php 

	/* Router */
	$page = null;
	if ( isset($_GET["page"]) ) { //if we're getting page info from the url
		$page = $_GET["page"]; // then use it: url?page=string . 
	} else { 
		$page = "home"; // if not, set page to our default, "home".
	}
	
?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DigiFab Machines| <?=$page?></title>

		<link rel="stylesheet" type="text/css" href="css/site.css">
	</head>

	<body>

		<header>
			<inner-column>

				<section class="page-section site-header">
					<?php include("site-menu.php")?>
				</section>

			</inner-column>
		</header>

		<main>
		<!-- setting up page templates -->	
			<?php 
				if ($page == "home") {
					include("home.php");
				}
				if ($page == "list") {
					include("list.php");
				}
				if ($page == "detail") {
					include("detail.php");
				}
				// how do we call specific pages?
			?> 
		</main>

		<footer>
			<inner-column>

				<section class="page-section site-header">
					<p>Footer</p>
				</section>

			</inner-column>	
		</footer>

	</body>
</html>













