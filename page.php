
<?php get_header(); ?>

<!-- :::::::::::::::::::: Main Content ::::::::::::::::::: -->

	<main class="main-content-single" role="main">

		<!-- Start the Loop. -->
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		 	$category = get_the_category(); 
				$catName = $category[0]->slug;
				$catid = $category[0]->cat_ID;
				$postid = $post->ID;
				$catNameFull = $category[0]->name; 	?>	
	 	
		<?php marks_catid($catid, $catName, $postid); ?>
		 <div class="main-post-wrap-single">

		 	<div id="main-post-inner-single">

		 		<div id="main-post-title-header" class='<?php echo $catName;?>'>

			 		<div id="main-post-title-single">

			 			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php single_post_title(); ?> <?php edit_post_link(); ?></a></h1>
			 		<p>Posted by <?php the_author_posts_link() ?> on <?php the_time('jS F') ?>.</p> 
			 		</div>

			 		<div id="main-post-title-category">
			 		<?php echo $catNameFull; ?>
			 		</div>

		 		</div>

		 		

				<div style="clear:both"></div>

			 	<article id="main-post-content-single">
			 		<?php the_content(); ?>
			 	</article>
			 	
			 	<div style="clear:both"></div>

				<?php $fixedExcerpt = get_the_excerpt();
					$tags = array("<p>", "</p>");
  					$fixedExcerpt = str_replace($tags, "", $fixedExcerpt); ?>
  					<?php $urlimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-home' ); ?>

				<div class="inner-share-single <?php echo $catName?>">

					<div class="share-wrap">
							<img src="<?php bloginfo('template_directory'); ?>/images/share@2x.png" width="32px" alt="Share Button">
							<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink() ?>&p[images][0]=&p[title]=The Daisy Jaynes - <?php the_title_attribute(); ?>&p[summary]=<?php echo $fixedExcerpt; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php bloginfo('template_directory'); ?>/images/facebook@2x.png" width="32px" alt="Facebook Share Button">
							</a>
							<a href="http://twitter.com/home?status=The Daisy Jaynes - <?php the_title_attribute(); ?> - <?php the_permalink() ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php bloginfo('template_directory'); ?>/images/twitter@2x.png" width="32px" alt="Twitter Share Button">
							</a>								
							<a href="https://plus.google.com/share?url=<?php the_permalink() ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php bloginfo('template_directory'); ?>/images/googleplus@2x.png" width="32px" alt="Google Plus Share Button">
							</a>
							<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo $urlimage; ?>&description=<?php echo $fixedExcerpt; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php bloginfo('template_directory'); ?>/images/pinterest@2x.png" width="32px" alt="Pinterest Share Button">
							</a>

							<a href="http://tumblr.com/share?s=&v=3&t=The Daisy Jaynes - <?php the_title_attribute(); ?>&u=<?php the_permalink() ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
								<img src="<?php bloginfo('template_directory'); ?>/images/tumblr@2x.png" width="32px" alt="Tumblr Share Button">
							</a>
					</div>							
				</div>

				<div style="clear:both"></div>

			</div> <!-- ends main-post-inner -->
 			</div> <!-- ends main-post-wrap -->

					
		
		 <?php endwhile; else: ?>

		 	<p>Sorry, no posts matched your criteria.</p>

		 	</div> <!-- ends main-post-inner -->
 			</div> <!-- ends main-post-wrap -->

		 <?php endif; ?>
 
		 
	</main>


<?php get_sidebar(); ?>
<div style="clear:both"></div>
<?php get_footer(); ?>