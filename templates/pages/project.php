
<?php 

	$json = file_get_contents("data/projects.json");
	$projectData = json_decode($json, true);

 ?>

<section class="project-detail">

	<?php 
		foreach ($projectData as $project) {
			if ( $project["id"] == $_GET["id"] ) {
				
				$projectDetails = $project;

				$title = $projectDetails["title"];
				
				$url = $projectDetails["ext-url"];
				
			}
		} 
	?>

	<h1 class="loud-voice"><?=$title?></h1>

	<h2 class="attention-voice">Subtitle</h2>

	<p>Paragraph</p>

	<a href="<?=$url?>" target="_blank">View Project</a>

</section>