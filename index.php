
<?php include("header.php"); ?>


<section class="border-arrows">

	<?php //include('templates/components/border-arrows.php'); ?>

</section>


<section class="print-drawing">
	<inner-column>

		<print-drawing>
		
			<section class="views">
				
				<picture class="hello-small">
					<img src="images/hello.png" alt="An image showing base and projected views
					of the text, 'Hello'.">
				</picture>

				<picture class="hello-large">
					<img src="images/hello-world.png" alt="An image showing base and projected views
					of the text, 'Hello, world!'">
				</picture>

			</section>

			<section class="content">

				<?php 
				if ( isset ( $_GET["page"] ) ) {
					$page = $_GET["page"];

					if ($page == "home") {
						include("templates/modules/welcome.php");
					}

					if ($page == "goals") {
						include("templates/modules/goals-list.php");
					}

					if ($page == "projects") {
						include("templates/modules/projects-list.php");
					}

					if ($page == "resume") {
						include("templates/modules/resume-list.php");
					}
				} 
				else { 
					include("templates/modules/welcome.php"); 
				}	
				?> 

			</section>

			<section class="title-block"> 
				
				<?php include("templates/components/title-block.php"); ?>
			
			</section>

		</print-drawing>

	</inner-column>
</section>


 <?php include("footer.php"); ?>















