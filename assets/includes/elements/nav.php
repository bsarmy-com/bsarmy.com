<?php


echo <<<EOT

	<header>
		
		<div class="navbar navbar-dark bg-dark-green shadow-sm">
			<div class="container">
				<a href="/" class="navbar-brand d-flex align-items-center">
					<img src="/assets/icons/logo.png" alt="bsarmy.com" height="80px" width="215">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
					aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
		<div class="collapse bg-dark-green" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<div class="container-fluid">
							<div class="row">
								<div class="col">
									<h4 class="text-white">Links</h4>
									<!-- <ul style="list-style: none;" class="text-white list-group list-group-flush"> -->
										<a class="text-light-tan list-group-item" href="/dfac/">DFAC Schedule</a>
										<a class="text-light-tan list-group-item" href="/gyms/">Fitness Centers</a>
										<!-- </ul> -->
								</div>
								<div class="col">
									<h4 class="text-white">Resources</h4>
									<a class="text-light-tan list-group-item" href="https://www.armyresilience.army.mil/sharp/" target="_blank">SHARP</a>
									<a class="text-light-tan list-group-item" href="https://www.smdc.army.mil/RESOURCES/EO/" target="_blank" data-bs-toggle="tooltip" data-bs-title="Equal Opportunity">EO</a>
									<a class="text-light-tan list-group-item" href="https://ig.army.mil/" target="_blank">Army IG</a>
									<a class="text-light-tan list-group-item" href="https://www.armyignited.army.mil/student/" target="_blank">ArmyIgnited</a>
									<a class="text-light-tan list-group-item" href="https://www.armyresilience.army.mil/suicide-prevention/pages/iWantToHelpSomeone.html" target="_blank">Suicide Hotline (Or call 988, press 1)</a>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contact</h4>
						<!--<button class="btn outline-light-tan" id="emailbutton">Email</button>
							<script>
								button = document.getElementById("emailbutton");
								// console.log(btoa("mailto:emailhehenoscammers"));
								// Decode the email address and set the href to it
								// This is to prevent bots from scraping the email address
								button.addEventListener("click", function() {
									window.location.href = atob("bWFpbHRvOmhpQGJzYXJteS5jb20=");
								});
							</script>
							-->
							<a href="/contact/" class="btn btn-light-tan disabled" id="contactButton" disabled>Contact Form</a>
							<!-- Below this is account related links -->
						<hr>

	EOT;

	
if (isset($_SESSION["name"])) {
	$name = $_SESSION["name"];
	// If the user is logged in, show the account related links

	$greetings = [
	 "Hello $name",
	 "Hi $name",
	 "Hey $name",
	 "How are we doing today, $name ?",
	 "Welcome back, $name.",
	 "Good to see you again, $name.",
	 "Hey there, $name.",
	 "Remember to stay hydrated, $name.",
	 "Is that a smile I see, $name ?",
	 "Hey $name! How's it going ?",
	];

	$randomGreeting = $greetings[rand(0, count($greetings) - 1)];

	echo <<<EOT
						<p class="text-white">$randomGreeting</p>
						<a href="/account/" class="btn outline-light-tan">Account</a>
						<a href="/logout/" class="btn outline-light-tan">Logout</a>
		EOT;
} else {
	// If the user is not logged in, show the login and register links
	echo <<<EOT
						<a href="/login/" class="btn outline-light-tan">Login</a>
						<a href="/register/" class="btn outline-light-tan">Register</a>
		EOT;
}

echo <<<EOT


					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<!-- This is where the offset navbar will go when activated -->
					</div>
				</div>
			</div>
		</div>
	</header>

	EOT;

