

<!-- 

url: http://localhost:8888/projects/routing-video/?name=miguel&food=pie

Query string = ?name=miguel&food=pie  

 -->

<!DOCTYPE html>

<!-- pages = home, list, detail -->

<?php 

	/* Router */
	$page = null;
	if ( isset($_GET["page"]) ) { //if we're getting page info from the url
		$page = $_GET["page"]; // then use it: url?page=string . 
	} else { 
		$page = "home"; // set page to our default, "home".
	}
	
?>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Routing vid | <?=$page?></title>
	</head>

	<body>

		<header>
			<?php include("site-menu.php")?>
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
			?> 
		</main>

	</body>
</html>