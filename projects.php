
<?php include("header.php"); ?>

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
				
				<picture class="projects-small">
					<img src="images/projects-small.png" alt="An image showing the text, 'Projects'.">
				</picture>

				<picture class="projects-large">
					<img src="images/projects-large.png" alt="An image showing the text, 'Projects'.">
				</picture>

			</section>

			<section class="content">
				
				<a href="projects/e4p">Forms</a>
				<a href="?">Mock Client (placeholder)</a>
				<a href="?">Responsive Layout (placeholder)</a>

				<?php 
					include("menu.php");
				?>

			</section>

			<?php  
				include("title-block.php"); 
			?>

		</print-drawing>
	</div>
</section>

 <?php include("footer.php"); ?>
