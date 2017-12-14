<!-- Footer -->
<section id="footer">
	<div class="inner">
		<h2 class="major">{{$infoTable->section_five_title}}</h2>
		<p>{{$infoTable->section_four_description}}</p>
		<form method="post" action="#">
			<div class="field">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" />
			</div>
			<div class="field">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" />
			</div>
			<div class="field">
				<label for="message">Message</label>
				<textarea name="message" id="message" rows="4"></textarea>
			</div>
			<ul class="actions">
				<li><input type="submit" value="Send Message" /></li>
			</ul>
		</form>
		<ul class="contact">
			<li class="fa-home">
				{{$infoTable->title}}<br />
				{{$infoTable->social_address_1}}<br />
			</li>
			
			@if($infoTable->social_address_2)
				<li class="fa-envelope"><a href="#">{{$infoTable->social_address_2}}</a></li>
			@endif

			@if($infoTable->social_twitter)
				<li class="fa-twitter"><a href="#">{{$infoTable->social_twitter}}</a></li>
			@endif

			@if($infoTable->social_facebook)
				<li class="fa-facebook"><a href="#">{{$infoTable->social_facebook}}</a></li>
			@endif

			@if($infoTable->social_github)
				<li class="fa-github"><a href="#">{{$infoTable->social_github}}</a></li>
			@endif

			@if($infoTable->social_instagram)
				<li class="fa-instagram"><a href="#">{{$infoTable->social_instagram}}</a></li>
			@endif

			@if($infoTable->social_youtube)
				<li class="fa-youtube"><a href="#">{{$infoTable->social_youtube}}</a></li>
			@endif


		</ul>
		<ul class="copyright">
			<li>&copy; {{$infoTable->title}} All rights reserved.</li><li>Layout: <a target="_blank" href="http://html5up.net">HTML5 UP</a></li><li>Pictures: <a target="_blank" href="https://unsplash.com">Unsplash</a></li>
		</ul>
	</div>
</section>
</div>

<!-- Scripts -->
	<script src="/assets/js/skel.min.js"></script>
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.scrollex.min.js"></script>
	<script src="/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="/assets/js/main.js"></script>

</body>
</html>
