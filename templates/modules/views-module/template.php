

<picture-module>
	<?php 

		$json = file_get_contents("data/views.json");
		$viewsData = json_decode($json, true);

		//formatCode($viewsData);

	?>

  
		<picture class="">
			<img src="" alt="">
		</picture>
	
</picture-module>

<!-- <picture-module>
	<picture class="hello-small">
		<img src="images/hello.png" alt="An image showing base and projected views
		of the text, 'Hello'.">
	</picture>

	<picture class="hello-large">
		<img src="images/hello-world.png" alt="An image showing base and projected views
		of the text, 'Hello, world!'">
	</picture>
</picture-module> -->