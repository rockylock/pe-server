
<experience-module>

	<?php 
		$json = file_get_contents("data/roles.json");
		$rolesData = json_decode($json, true);
	?>
	
	<h1 class="loud-voice"><?=$page?></h1>
	
	<?php foreach($rolesData as $role) { ?>

		<role-detail>
			<h2 class="attention-voice"><?=$role["job-title"]?></h2>

			<h3><?=$role["employer"]?> | <?=$role["timeframe"]?></h3>

			<ul class="resume-list">
				<?php foreach($role["outcomes"] as $outcome) { ?>
					<li>
						<p><?=$outcome?></p>
					</li>
				<?php } ?>
			</ul> 
		</role-detail>

	<?php } ?>

</experience-module>