
<?php

	$sections = [
		[
			"heading" => "Short-term (within 3 months)",
			"tasks" => [
				"Have a website I'm proud to share.",
				"Earn compenency in HTML/CSS/PHP/JS.",
				"Assemble a shareable portfolio.",
			],
		],
		[
			"heading" => "Mid-term (within 6 months)",
			"tasks" => [
				"Gain employment as a front-end freelancer.",
				"Complete the interior of my truck.",
				"Begin learning Python to further my digital fabrication projects.",
			],
		],
		[
			"heading" => "Long-term (within 5 years)",
			"tasks" => [
				"Own land on the Northern California coast.",
				"Build a small series of homes on the property.",
			],
		],
	];

?>

<section class="goals-list">
	<!-- <div class="inner-column"> -->
		
		<?php foreach($sections as $section) { ?>
		
		<div class="goal">
		
			<h1 class="goal-timeframe"> <?=$section["heading"]?></h1>

			<ul class="goal-tasks">
				<?php foreach($section["tasks"] as $task) { ?>
					<li> 
						<?=$task?>
					</li>
				<?php }?>
			</ul>
		</div>

		<?php } ?>

	<!-- </div> -->
</section>








