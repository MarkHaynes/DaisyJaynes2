<?php get_header(); ?>

	
		<?php 
		$args = array (
			'posts_per_page'    => 1,
			'category_name' => 'Featured',
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		$category = get_the_category(); 
		$catName = $category[0]->slug;
		$catNameFull = $category[0]->name; 	?>

	<div class="top-wrap">	 	
		
		<article class= "featured-wrap item">
			<div class="featured-header"> 
				Featured Article
			</div>

			<div class="featured-image">

				<?php if ( has_post_thumbnail() ) {
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured-full' );?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				    	<?php echo '<img src="' . $image_src[0]  . '" alt="'. get_the_short_title() . '"/>';
			    		}; ?>
			    	</a>
			</div>

			<div class="featured-meta">

				<div class="post-category">
					<?php echo $catNameFull;?>
				</div>
				
				<h1 class="featured-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a>
				</h1>

				<div class= "post-excerpt">
					<?php the_excerpt();?>
					<a href="<?php the_permalink() ?>" class="read-more" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
				</div><!-- excerpt -->
					
			</div><!-- featured-meta -->

		</article><!-- article -->		

		<div class="featured-content">
			<div class="featured-content-inner">
				<div id="instafeed">
				</div>
			</div><!-- post-content-inner -->
		</div><!-- post-content -->
		
		<div style="clear:both"></div>
	
	</div><!-- top wrap -->
	
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<div style="clear:both"></div>

	<?php wp_reset_postdata(); ?>

	<main id="main-content" role="main" class="js-isotope">
		<?php 
		 
		$args2 = array (
			'ignore_sticky_posts'    => true,
			'posts_per_page' => 50,
			'paged' => $paged
		);
		$query2 = new WP_Query( $args2 );
	
		

		?>
 		<?php if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post();
		
		$category = get_the_category(); 
		$catName = $category[0]->slug;
		$catNameFull = $category[0]->name; 	?>
		
		<article class= "post-wrap item">
			<div class="post-content">
				<div class="post-image">

					<?php if ( has_post_thumbnail() ) {
						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured-single' );?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				    	<?php echo '<img src="' . $image_src[0]  . '" class="post-image"alt="'. get_the_short_title() . '"/>';
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
				
				</div><!-- post-content-inner -->
			
			</div><!-- post-content -->
			
			<div style="clear:both"></div>
		
		</article><!-- article post-wrap -->

		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
	
	</main>
	
	<div style="clear:both"></div>

	<div class="bottom-nav">
		<span class="bottom-nav-newer-link"><?php previous_posts_link( 'Newer Posts' ); ?></span>
		
		<a class="bottom-nav-home" href="http://thedaisyjaynes.com" title="The Daisy Jaynes Home Page">Home</a>
		
		<span class="bottom-nav-older-link"><?php next_posts_link( 'Older Posts', '' ); ?></span>
	</div>

<?php get_footer(); ?>        
