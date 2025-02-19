<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/beforeIncludes.php';

if (isset($_GET['logout']) && $_GET['logout'] == 'true')
{
	session_destroy();
	header("Location: /");
}


$title = "The Barracks Army | Home";
$url = "https://".$_SERVER['HTTP_HOST']."/";
$type = "website";
$description = 'Improving the barracks one little thing at a time. "It does not take a majority to prevail... but rather an irate, tireless minority, keen on setting brushfires of freedom in the minds of men." - Samuel Adams';
$image = "https://".$_SERVER['HTTP_HOST']."/assets/images/bsarmy.com_og-image.jpeg";

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
	<?php

	// You can blame https://css-tricks.com/snippets/htaccess/use-php-inside-javascript/ for this monstrocity.
	// It works. See https://imgflip.com/i/8fdw67
	echo <<<EOT
	<script src="/assets/js/chat.php"></script>
	EOT;
	?>

</head>

<body>

	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/nav.php'; ?>

	<main>

		<section class="py-5 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">

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
			<div class="row py-lg-5">
				<div class="col-lg-6 mx-auto">
					<h3 class="h3">
						So far, this site includes:
					</h3>
					<ul class="list-group mx-1">
						<a class="list-group-item bg-dark-green outline-dark-green" href="/dfac/">
							DFAC Schedule for
							<?php echo date('F Y'); ?> <i class="fa-solid fa-arrow-right"></i>
						</a>
						<a class="list-group-item bg-light-tan" href="/register/">
							Register to subscribe to DFAC SMS alerts <i class="fa-solid fa-arrow-right"></i>
						</a>
					</ul>
				</div>
			</div>

			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
					<h3 class="h3 mt-2">
						Send everyone a message!
					</h3>

					<button id="activate-chat" class="btn btn-dark-green mb-3 mx-auto">Toggle Chat</button>
					
					<div id="chat" style="display: none;">
						<ul class="list-group list-group-flush">
							<li class="list-group-item active bg-dark-green rounded" style="list-style: none;">
								<span class="time badge bg-secondary">Now </span>
								Messages disappear after 2 hours.<br>
								Use this space to ask or offer to give a ride to the <a class="text-white" href="/dfac/"
									target="_blank">DFAC</a> or <a class="text-white" href="/gyms/" target="_blank">gym</a>,
								or just to say Hi!
							</li>						
						</ul>

						<form class="input-group mb-3" id="messageInput" >
							<input class="input-group-text form-control" type="text" name="message" id="message" placeholder="Message" autocomplete="off">
							<button class="btn outline-dark-green" type="submit" value="Send">Send</button>
						</form>
					</div>
				</div>
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