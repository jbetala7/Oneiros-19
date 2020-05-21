		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		<!--<script src="assets/js/jquery.easing.1.3.js"></script>-->
		<!-- Gmap JS 
		<script src="assets/js/gmap3.min.js"></script>-->
        <!-- Google map api -->
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>-->
		<!-- Custom map JS -->
		<!--<script src="assets/js/custom-map.js"></script>-->
		 <!--WOW JS -->
		<script src="assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="assets/js/switcher.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
		<!--<script src="assets/js/particle.js"></script>-->
		<!--<script src="assets/js/snap-scroll.js"></script>-->
		
		<!--New ONO Anuuj JS-->
		<script src="assets/js/onoTEXT2JS.js"></script>

		<script src="assets/js/jquery.js"></script>
		
	<!--<script type="text/javascript" src="https://cdn.rawgit.com/alvarotrigo/fullPage.js/master/jquery.fullPage.js"></script>
		<script>$(document).ready(function() { $('#fullpage').fullpage(); });</script>-->
		<!--<script>$(function(){

				$("section").SnapScroll();
			  
				  });
				  $("section").SnapScroll({
				  // Fires events
					events:true,                    

				// Fires when snap point element when snapped
				eventChangeActive:"snapscroll_change-active",   

				// Fires when snap point element is within the window
				eventChangeVisible:"snapscroll_change-visible",   

				});
			  </script>-->



		<?php
		if($page == 'index')
		{
			echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.4.2/pixi.min.js'></script>
		<script  src='particle/script.js'></script>";
		}
		if($page == 'majorevents')
		{
			echo "<!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src='musica/js/jquery/jquery-2.2.4.min.js'></script>
    <!-- Popper js -->
    <script src='musica/js/bootstrap/popper.min.js'></script>
    <!-- Bootstrap js -->
    <script src='musica/js/bootstrap/bootstrap.min.js'></script>
    <!-- All Plugins js -->
    <script src='musica/js/plugins/plugins.js'></script>
    <!-- Active js -->
    <script src='musica/js/active.js'></script>";
		}
		if($page == 'events')
		{
			echo "<script type='text/javascript' src='port/js/jquery.js'></script>
			<script type='text/javascript' src='port/js/custom.js'></script>";
		}
		if($page == "registration")
		{
			echo "<script src='form/js/main.js'></script>";
		}
		if($page == "team")
		{
			echo "<script src='team/js/jquery.min.js'></script>
			<script src='team/js/jquery-migrate-3.0.1.min.js'></script>
			<script src='team/js/popper.min.js'></script>
			<script src='team/js/bootstrap.min.js'></script>
			<script src='team/js/jquery.easing.1.3.js'></script>
			<script src='team/js/jquery.waypoints.min.js'></script>
			<script src='team/js/jquery.stellar.min.js'></script>
			<script src='team/js/owl.carousel.min.js'></script>
			<script src='team/js/jquery.magnific-popup.min.js'></script>
			<script src='team/js/aos.js'></script>
			<script src='team/js/jquery.animateNumber.min.js'></script>
			<script src='team/js/scrollax.min.js'></script>
			<script src='team/js/main.js'></script>";
		}
		if($page == "accomodation")
		{
			echo "
			<script src='estate/js/owl.carousel.min.js'></script>
			<script src='estate/js/main.js'></script>";
		}

		if($page == "funzone")
		{
			echo "<script  src='funzone/funzone.js'></script>";
		}
		?>

		<!-- Service Worker -->
		<script>
		if ('serviceWorker' in navigator) {
  			window.addEventListener('load', function() {
    		navigator.serviceWorker.register('serviceworker.js').then(function(registration) {
      		// Registration was successful
      		console.log('ServiceWorker registration successful with scope: ', registration.scope);
    		}, function(err) {
      		// registration failed :(
      		console.log('ServiceWorker registration failed: ', err);
   	 		});
  		});
		}

		</script>
		
	</main>	
	</body>
</html>