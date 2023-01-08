
<?php

	$sections = [
		[
			"heading" => "Short-term (within 3 months)",
			"tasks" => [
				"Have a website I'm proud to share with friends, prospective clients, and recruiters.",
				"Earn competency in HTML/CSS/PHP/JS.",
				"Assemble a shareable portfolio with 5 projects.",
			],
		],
		[
			"heading" => "Mid-term (within 6 months)",
			"tasks" => [
				"Build a website for the makerspace I help lead.",
				"Gain two clients as a front-end freelancer.",
				"Complete the interior of my truck, Sally. They're great, but their seat sure ain't!",
				"Learn Python basics well enough to augment one digital fabrication project. ",
			],
		],
		[
			"heading" => "Long-term (within 5 years)",
			"tasks" => [
				"Own land on the Northern California coast.",
				"Build a series of small structures on the property.",
			],
		],
	];

?>

<section class="goals-list">
		
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
		
</section>








