
<goals-module>
	<?php 

		$json = file_get_contents("data/goals.json");
		$goalsData = json_decode($json, true);
	
	?>

	<?php foreach($goalsData as $timeBlock) { ?>
		
		<goal-detail>
			<h2 class="attention-voice goal-timeframe"> <?=$timeBlock["timeframe"]?></h2>

			<ul class="goal-tasks">
				<?php foreach($timeBlock["goals"] as $goal) { ?>
					<li> 
						<p><?=$goal?></p>
					</li>
				<?php } ?>
			</ul>
		</goal-detail>

	<?php } ?>
</goals-module>