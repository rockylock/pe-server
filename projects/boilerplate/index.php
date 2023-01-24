
<?php include("router.php")?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?=$page?></title>
		<meta name="description" content="[[insert description]]">
		
		<link rel="stylesheet" href="css/site.css">
		<link rel="icon" type="image/x-icon" href="[[Insert favicon.ico]]">

		<!-- Open Graph Image -->
		<meta property="og:image" content="[[insert meta image source]]">
		<meta property="og:image:secure_url" content="[[insert meta image source]]">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:image:alt" content="[[insert OG image alt content]]">
	</head>

	<body class="<?=$page?>">

		<?php include("header.php")?>
		
		<?php getTemplate($page)?>

		<?php include("footer.php")?>













