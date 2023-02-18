


<!--
"image": "images/landscape.jpg",
"heading": "Project 1",
"blurb": "info blurb for p1",
"url": "?" 
-->

<!-- 
create project list
links route to project detail page
detail page includes Target=_blank 
-->

<!-- 
<a href="projects/e4p">PHP forms</a>
<a href="projects/speed-and-spoke">Mock client</a>
<a href="projects/super-layout-challenge">Responsive Layout</a> 
-->


<!-- <projects-module>

	<?php 

		$json = file_get_contents("data/projects.json");
		$projectsData = json_decode($json, true);

	?>

	<ul>
		<?php foreach($projectsData as $project) { ?>
			<li>
				<project-card>
					<picture>
						<img src="images/landscape.jpg">
					</picture>

					<card-text>	
						<h2 class="attention-voice"><?=$project["heading"]?></h2>

						<p class="calm-voice"><?=$project["blurb"]?></p>

						<a href="?">Learn more</a>
					</card-text>
				</project-card>
			</li>		
		<?php } ?>
	</ul>

</projects-module> -->