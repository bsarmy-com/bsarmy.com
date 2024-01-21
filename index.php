<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/beforeIncludes.php';

if (isset($_GET['logout']) && $_GET['logout'] == 'true')
{
	session_destroy();
	header("Location: /");
}

$title = "The Barracks Army | Home";
$url = "https://bsarmy.com/";
$type = "website";
$description = 'Improving the barracks one little thing at a time. "It does not take a majority to prevail... but rather an irate, tireless minority, keen on setting brushfires of freedom in the minds of men." - Samuel Adams';
$image = "https://bsarmy.com/images/bsarmy.com_og:image.jpeg";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/head.php'; ?>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<script src="/assets/js/chat.js"></script>

</head>

<body>

	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/nav.php'; ?>

	<main>

		<section class="py-5 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 mx-auto">

					<?php
					$randomTagline = [
					 "one little thing",
					 "one soldier",
					 "one papercut",
					 "one station",
					];

					$randomTagline = $randomTagline[rand(0, count($randomTagline) - 1)];
					?>
					<h1 class="font-weight-bold">Improving the barracks
						<?php echo $randomTagline; ?> at a time.
					</h1>
					<p class="lead text-muted">"It does not take a majority to prevail... but rather an irate, tireless
						minority, keen on setting brushfires of freedom in the minds of men." - Samuel Adams</p>
					<small>Mmmmm, warm brushfires.</small>
					<p>
						<a href="https://github.com/bsarmy-com/bsarmy.com/" target="_blank" rel="noopener noreferrer"
							class="btn btn-light-tan my-2">See our progress!</a>
						<a href="https://forms.gle/F9c7CEvEkwV6TbZNA" class="btn btn-dark-green my-2" target="_blank"
							rel="noopener noreferrer">Suggestion form</a>
					</p>
				</div>
			</div>
			<!-- <div class="row py-lg-5">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<h3 class="h3">
						So far, this site includes:	
					</h3>
					<ul class="list-group mx-1">
						<a class="list-group-item active bg-dark-green" href="/dfac/">
							DFAC Schedule for <?php echo date('F Y'); ?> <i class="fa-solid fa-arrow-right"></i>
						</a>
						<a class="list-group-item bg-light-tan" href="/register/">
							Register to subscribe to DFAC SMS alerts <i class="fa-solid fa-arrow-right"></i>
						</a>
					</ul>
				</div>
				<div class="col-lg-4"></div>
			</div> -->

			<div class="row py-lg-5">
				<div class="col-lg-2"></div>
				<div class="col-lg-4">
					<h3 class="h3">
						Send everyone a message!
					</h3>
					<p>
						<!-- <a href="/chat/" class="btn btn-dark-green my-2" target="_blank" rel="noopener noreferrer">Chat</a> -->
						<button id="activate-chat" class="btn btn-dark-green">Toggle Chat</button>

					<ul id="chat" style="display: none;" class="list-groupl">
						<li class="list-group-item" style="list-style: none;">
							<span class="time">Wed Jan 17 05:40:05 PM EST 2024</span>
							Hey! My name is Lucas Burlingham and I've made this site. Please enter a message below and
							hit "send". Messages disappear after 2 hours.<br>
							SHARP and EO aren't funny. Keep it civil, please.<br>
							Use this space to ask or offer to give a ride to the <a href="/dfac/"
								target="_blank">DFAC</a> or <a href="/gyms/" target="_blank">gym</a>, or just to say Hi!
						</li>
					</ul>

					<form method="POST" id="messageInput">
						<input type="text" name="message" id="message" placeholder="Message">
						<input type="submit" value="Send">
					</form>				
					</p>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</section>
	</main>
	<?php
	// Add footer to page
	require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/footer.php';

	// Don't put php closing tag at the end, it can cause problems with redirects and headers?
	require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/afterIncludes.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/db_disconnect.php';

	?>

</body>

</html>