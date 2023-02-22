
 <projects-module>

	<?php 

		$json = file_get_contents("data/projects.json");
		$projectsData = json_decode($json, true);


	?>

	<ul>
		<?php foreach($projectsData as $project) { 

			$title = $project["title"];
			$blurb = $project["blurb"];
			$url = $project["url"];

			?>
			<li>
				<project-card>
					<picture>
						<img src="images/landscape.jpg">
					</picture>

					<card-text>	
						<h2 class="attention-voice"><?=$title?></h2>

						<p class="calm-voice"><?=$blurb?></p>

						<a href="<?=$url?>">Learn more</a>
					</card-text>
				</project-card>
			</li>		
		<?php } ?>
	</ul>

</projects-module>