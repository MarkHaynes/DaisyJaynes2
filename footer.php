</div> 
<!-- site-wrapper -->
<div id="footer-wrap">
	<footer>
		<p>The Daisy Jaynes is operated and written by Victoria Haynes &copy 2014. </p>
		<img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/largedaisy.png" alt="Daisy Logo"/>
	</footer>
</div>
	<script src="<?php bloginfo('template_url'); ?>/js/mobile-menu.js"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.js"></script>
	

	<!-- <script type="text/javascript">


	$('#main-content').imagesLoaded()
	  .always( function( instance ) {
	    console.log('all images loaded');
	  })
	  .done( function( instance ) {
	  	console.log('all images loaded sucessfully');
	    var $container = jQuery('#main-content');
			// init
			$container.isotope({
			  // options
			  itemSelector: '.item',
			  layoutMode: 'masonry'
		});

	  })

	  .fail( function() {
	    console.log('all images loaded, at least one is broken');
	  });

	</script> -->

	<script type="text/javascript">
	var $container = $('#main-content').imagesLoaded( function() {
  $container.isotope({
    // options
    layoutMode: 'masonry',
    transitionDuration: '0.8s'
  });
});



	</script>

	<script>
		$( ".link-mag" ).click(function() {
		  $( "section#search-panel" ).toggle();
		});
	</script>
<?php wp_footer();?>
