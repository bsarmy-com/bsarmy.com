<?php


?>
<footer class="py-5 my-5 border-top container">
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
		<div class="col mb-3">
			<div class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
				<!-- bsarmy.com logo -->
				<img src="/assets/icons/logo.png" height="80px" width="215px" class="rounded" alt="BS Army Logo" />
			</div>
			<p class="text-body-secondary">© Lucas Burlingham 2024</p>
			<p class="text-body-secondary">bsarmy.com is not affiliated with the US DoD or the US Army.</p>
			<p class="text-body-secondary">Continued use of this website constitutes acceptance of our <a
					href="https://bsarmy.com/docs/terms_conditions/" class="text-body-secondary">Terms & Conditions</a>.
			</p>
			<p class="text-body-secondary">View our <a href="https://bsarmy.com/docs/privacy/"
					class="text-body-secondary">Privacy Policy</a>.</p>

		</div>

		<div class="col mb-3"></div>

		<div class="col mb-3">
			<h5>Navigation</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="https://bsarmy.com/"
						class="nav-link p-0 text-body-secondary">Home</a>
				</li>
				<li class="nav-item mb-2"><a href="https://bsarmy.com/login/"
						class="nav-link p-0 text-body-secondary">Login</a></li>
				<li class="nav-item mb-2"><a href="https://bsarmy.com/register/"
						class="nav-link p-0 text-body-secondary">Signup</a></li>
				<!-- <li class="nav-item mb-2"><a href="https://bsarmy.com/contact/"
						class="nav-link p-0 text-body-secondary disabled" disabled>Contact</a></li>
				<li class="nav-item mb-2"><a href="https://bsarmy.com/about/"
						class="nav-link p-0 text-body-secondary disabled" disabled>About</a></li> -->
			</ul>
		</div>

		<div class="col mb-3">
			<h5>Facilities</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2">
					<a href="https://bsarmy.com/dfac/" class="nav-link p-0 text-body-secondary"
						rel="noopener noreferrer">
						<?php echo date('F Y'); ?> DFAC Schedule
					</a>
					<a href="https://bsarmy.com/gyms/" class="nav-link p-0 text-body-secondary"
						rel="noopener noreferrer">
						Fitness Centers
					</a>
				</li>
			</ul>
		</div>

		<div class="col mb-3">
			<h5>Help</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Submit an Issue</a></li>
				<li class="nav-item mb-2">
					<a href="https://github.com/bsarmy-com/bsarmy.com/" class="nav-link p-0 text-body-secondary">
						Start Contributing on <i class="fa-brands fa-github" alt="GitHub"></i>
					</a>
				</li>
				<!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary disabled">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary disabled">About</a></li> -->
			</ul>
		</div>

		<?php
		// Show only on the production server
		if ($debug == false)
		{
			echo <<<EOT
	<!-- Trustedsite Certification www.trustedsite.com-->
	<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
	EOT;
		}
		?>
	</div>
</footer>