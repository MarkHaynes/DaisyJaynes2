<?php get_header(); ?>
	<main id= "main-content" role="main" class="js-isotope category-content" data-isotope-options='{ "columnWidth": 200, "itemSelector": ".item" }'>
		<?php 		
		if ( have_posts() ) : while ( have_posts() ) : the_post();		

		$category = get_the_category(); 
		$catName = $category[0]->slug;
		$catNameFull = $category[0]->name; 	?>
		
		<article class= "post-wrap item">
			<div class="post-content">
				<div class="post-image">

					<?php if ( has_post_thumbnail() ) {
						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured-single' );?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				    	<?php echo '<img src="' . $image_src[0]  . '" class="post-image '. $catName .'-border"alt="'. get_the_short_title() . '"/>';
			    	}; ?>
			    		</a>
						
				</div>
				<div class="post-content-inner">
					<div class="post-category">
						<?php echo $catNameFull;?>
					</div>
					<h1 class= "post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h1>

					<div class= "post-excerpt">
						<?php the_excerpt();?>
						<a href="<?php the_permalink() ?>" class="read-more" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
					</div><!-- excerpt -->

					<div class="inner-meta <?php echo $catName;?>">
						Posted: <?php the_time('jS F Y') ?> <br>By:<?php the_author_posts_link() ?>
					</div>
				</div><!-- post-content-inner -->
			</div><!-- post-content -->
			<div style="clear:both"></div>
		</article><!-- article post-wrap -->

		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

		<div style="clear:both"></div>
	</main>

<?php get_footer(); ?>        
