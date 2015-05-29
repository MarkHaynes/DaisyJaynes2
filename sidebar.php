<!-- :::::::::::::::::::: Sidebar Content ::::::::::::::::::: -->
<section id="sidebar">
	<aside id="sidebar-related-posts">
		<h2 id="title-sidebar">Related Articles...</h2>
		<ul id="related-post">
		<?php
		$exclude_ids = array($GLOBALS['daisy_sidebar_postid']);
		$id = $exclude_ids[0];
			 $related_query = new WP_query(array('cat' => $GLOBALS['daisy_sidebar_categoryid'], 'showposts' => 4, 'post__not_in' => $exclude_ids, 'orderby' => 'rand' )); ?>

			<?php if ( $related_query->have_posts() ) : while ( $related_query->have_posts() ) : $related_query->the_post();

					if ( has_post_thumbnail() ) {
						
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'related-image' );?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				    	<?php echo '<img src="' . $image_src[0]  . '" alt="'. get_the_short_title() . '"/>';
			    		}; ?>
			    	</a>

				 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				 </li>

			<?php endwhile; else: ?>
				<li><?php _e("Sorry, We can't see any other posts related to this one!"); ?></li>
			<?php endif; ?>
		</ul>
	</aside>

	<aside id="sidebar-social-networks">
		<h2 id="title-sidebar">Connect With Us...</h2>
		<div style="clear:both"></div>
			<a href="http://facebook.com" target="_blank" title="Facebook"><img src="<?php bloginfo('template_directory'); ?>/images/facebook@2x.png" alt="Facebook logo"></a>
			<a href="http://twitter.com/thedaisyjaynes" target="_blank" title="Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter@2x.png" alt="Twitter logo"></a>
			<a href="https://plus.google.com/100213557674063325769" target="_blank" rel="publisher"><img src="<?php bloginfo('template_directory'); ?>/images/googleplus@2x.png" alt="Google Plus Logo"></a>
			<a href="http://instagram.com/thedaisyjaynes" target="_blank" title="Instagram"><img src="<?php bloginfo('template_directory'); ?>/images/instagram@2x.png" alt="Instagram Logo"></a>
			<a href="http://pinterest.com/thedaisyjaynes1" target="_blank" title="Pinterest"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest@2x.png" alt="Pinterest Logo"></a>
	
		<div style="clear:both"></div>			
	</aside>
</section>