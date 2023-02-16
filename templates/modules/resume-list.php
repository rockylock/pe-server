
<!-- RESUME LIST -->

<?php 

	/*
		Job title
		Employer/Client
		Timeframe
		Responsibilities/Outcomes

		[
			"job-title" => "", 
			"employer" => "",
			"timeframe" => "",
			"outcomes" => [
				"",
				"",
				"",
				"",
				"",
			],
		],
	*/

	$roles = [
		[
			"job-title" => "Fab Lab Lead", 
			"employer" => "College of Alameda",
			"timeframe" => "2017 - Present",
			"outcomes" => [
				"Expose PCCD students, faculty, and staff to digital fabrication processes",
				"Create, implement, and document workshops & training materials",
				"Coordinate with community members, faculty, staff, and/or Student Technicians to ideate and oversee internal/external projects",
				"Assist in curriculum development for Modern Making (MAKR)",
				"Train Student Technicians to safely operate tools and equipment, hold workshops, and build projects",
			],
		],
		[
			"job-title" => "Apprentice Maintenance Machinist", 
			"employer" => "SFMTA",
			"timeframe" => "September 2017 - December 2017",
			"outcomes" => [
				"Inspected, reverse engineered, and manually machined parts for Muni Milan, PCC Historic Streetcars",
				"Entertained Journeyman Machinists with comical errors befitting of an Apprentice",
			],
		],
		[
			"job-title" => "Man Krew Safety Steward", 
			"employer" => "Black Rock City, LLC",
			"timeframe" => "May 2017 - September 2017",
			"outcomes" => [
				"Monitored Man Krew build sites (Reno, NV; Black Rock City, NV) to ensure safe working conditions",
				"Assisted construction teams to complete Burning Man, and Man Pavilion art installations",
				"Completed batch production of custom hardware and decorative paneling",
			],
		],
		[
			"job-title" => "Fab Lab T.A.", 
			"employer" => "Laney College",
			"timeframe" => "October 2016 - May 2017",
			"outcomes" => [
				"Taught students and faculty shop safety and proper tool/machine usage through workshops",
				"Assisted students and faculty with designing, prototyping, and building projects",
				"Set up, maintained, and experimented with digital fabrication machinery",
			],
		],
		[
			"job-title" => "Workforce Community Manager", 
			"employer" => "Captricity",
			"timeframe" => "December 2014 - April 2015",
			"outcomes" => [
				"Managed international crowdsourced workforce",
				"Researched, created, and tested projects designed to improve user workflow and engagement",
				"Coordinated with internal/external teams to prioritize projects",
			],
		],
		[
			"job-title" => "Q.A. Analyst", 
			"employer" => "Lumosity",
			"timeframe" => "March 2014 - August 2014",
			"outcomes" => [
				"Established manual, black box test plans for new games and features",
				"Assisted in testing for iOS Internationalization and Android App launches",
			],
		],
		[
			"job-title" => "Customer Care Mobile Team Lead", 
			"employer" => "Lumosity",
			"timeframe" => "March 2013 – March 2014",
			"outcomes" => [
				"Managed support team for Lumosity for iPhone and iPad (15M+ downloads, App Store #1 app)",
				"Reduced user inquiries through FAQs, improved SEO, and email auto-responders",
			],
		],
		[
			"job-title" => "Customer Care Web App Lead", 
			"employer" => "Lumosity",
			"timeframe" => "October 2012 – March 2013",
			"outcomes" => [
				"Prepared analysis of user data for Product and Development teams",
				"Identified and reported on trends in user complaints, feature requests, and bugs",
			],
		],
			[
			"job-title" => "Customer Care Mobile Team Lead", 
			"employer" => "Lumosity",
			"timeframe" => "March 2013 – March 2014",
			"outcomes" => [
				"Managed support team for Lumosity for iPhone and iPad (15M+ downloads, App Store #1 app)",
				"Reduced user inquiries through FAQs, improved SEO, and email auto-responders",
			],
		],		
		[
			"job-title" => "Customer Care Representative", 
			"employer" => "Lumosity",
			"timeframe" => "May 2011 – October 2012",
			"outcomes" => [
				"Provided expert email and phone support to Lumosity users, resolving ~100 tickets/day",
				"Initiated phone support billing channel, reducing chargebacks",
			],
		],	
	];


?>

<section class="resume">

	<section class="experience">
		
		<?php foreach($roles as $role) { ?>

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

	</section>
		

	<section class="education">
		
	</section>


	<section class="proficiency">
		
	</section>


	<section class="interests">
		
	</section>

</section>









