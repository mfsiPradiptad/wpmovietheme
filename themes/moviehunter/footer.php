<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right logo">
					<a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo do_shortcode( "[get_site_logo]" ); ?>" alt="logo"></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ); ?>. All rights reserved.</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'movie-secondary-menu',
					) 
				);
			?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	(function($) {
		$("#owl-demo").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 5,
			itemsDesktop : [640,4],
			itemsDesktopSmall : [414,3]

		});

		$("#slidey").slidey({
			interval: 8000,
			listCount: 5,
			autoplay: false,
			showList: true
		});
							
		$().UItoTop({ easingType: 'easeOutQuart' });

		$(".dropdown").hover( function() {
			$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
			$(this).toggleClass('open');        
			},
			function() {
				$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
				$(this).toggleClass('open');       
		});

		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
							
	}) ( jQuery );;
</script>
<!-- //here ends scrolling icon -->
<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ 
		window.scrollTo(0,1);
	} 
</script>

<?php wp_footer(); ?>
</body>
</html>