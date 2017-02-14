@extends('template')

<div class="banner">
		<div class="banner-info">
			<img src="{{ asset('images/Sportzinga_logo_final2_alpha_website.png') }}" alt="SportZinga">
			<h1><span>Under Construction</span></h1>
			<div class="progressbars" progress="70%"></div>
			<script src="{{ asset('js/jprogress.js') }}" type="text/javascript"></script>
				<script>
					// activate jprogress
					$(".progressbars").jprogress({
						background: "#80C340"
					});
				</script>
			<h2>SportZinga is coming soon to groom the sporty side of your kid and give shape to his/her dreams with world class network of coaches and sports facilities</h2>
			<div class="main-example">
				<img src="{{ asset('images/Olympic_Rings_HD.png') }}" alt="SportZinga" height="60%" width="60%">
				<div class="countdown-container" id="main-example"></div>
				<h2>We are a group of professional sports coaches who have come together to guide kids to become great in sports. You can post any query that you might have or simply like us on our facebook page below!</h2>
			</div>


			<div class="social-icons">
				<ul class="social-networks square spin-icon">
					<li><a href="https://www.facebook.com/sportzinga/" class="icon-facebook"></a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2017 SportZinga Under Construction. All rights reserved </p>
			</div>
		</div>
	</div>