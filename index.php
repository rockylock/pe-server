
<?php include("header.php")?>

	<div class="inner-column">

		<!-- <section class="border-arrows">
			<svg class="arrows" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.69 32.18">
  				<g class="arrow">
    				<polyline class="arrow-2" data-name="arrow" points="11.35 31.56 .62 13 22.07 13 11.35 31.56 11.35 .62"/>
  				</g>
			</svg>
		</section> -->

		<print-drawing>
			
			<section class="views">
				
				<picture class="hello-small">
					<img src="images/hello.png" alt="An image showing base and projected views
					of the text, 'Hello'">
				</picture>

				<picture class="hello-large">
					<img src="images/hello-world.png" alt="An image showing base and projected views
					of the text, 'Hello, world!'">
				</picture>

			</section>

			<section class="content">

				<?php include("modules/nav.php")?> 
				
				<?php include("modules/welcome.php")?>

			</section>

			<?php include("title-block.php")?>

		</print-drawing>
	</div>

 <?php include("footer.php")?>















