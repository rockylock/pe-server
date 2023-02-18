
<?php include("functions.php"); ?>
<?php include("header.php"); ?>


<section class="border-arrows">

	<?php //include('templates/components/border-arrows.php'); ?>

</section>


<section class="print-drawing">
	<inner-column>

		<print-drawing>
		
			<section class="views">
				
				<?php include("templates/modules/views-module/template.php"); ?>

			</section>


			<section class="content">

				<?php

				// ROUTER  
				$page = "home";
				if ( isset ($_GET["page"]) ) {
					$page = $_GET["page"];
				}

				$pageFilePath = "templates/pages/" . $page . ".php";

				if ( file_exists($pageFilePath) ) {
					include($pageFilePath);
				} else {
					echo "Error: page <code>$page</code> doesn't exist.";
				}
				
				?> 

			</section>
			

			<section class="title-block"> 
				
				<?php include("templates/components/title-block/template.php"); ?>
			
			</section>

		</print-drawing>

	</inner-column>
</section>


 <?php include("footer.php"); ?>















