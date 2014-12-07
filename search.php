
<?php get_header(); ?>

	<?php $searchresult = $_GET['s'];?>
	<h2 id="title-search">Your search results for <?php echo $searchresult;?> :</h2>



		<?php 		
		if ( have_posts() ) : while ( have_posts() ) : the_post();		

		$category = get_the_category(); 
		$catName = $category[0]->slug;
		$catNameFull = $category[0]->name; 	?>

			<main id="main-content" role="main" class="js-isotope">
		
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
				
				</div><!-- post-content-inner -->
			
			</div><!-- post-content -->
			
			<div style="clear:both"></div>
		
		</article><!-- article post-wrap -->

		<?php endwhile; else: ?>

				<main id="search">	 
			<img id="search" src="<?php bloginfo('template_directory'); ?>/images/largedaisy.png" alt="Daisy Logo"/> <p id="search">Sorry, we have searched the daisy fields and not found what you were looking for however, now your here, why not check out some of the following articles?<p>
			 <div style="clear:both"></div>

		<?php endif; ?>
	
	</main>
	<div style="clear:both"></div>
	<h2 id="title-search2">Our Latest Articles:</h2>
	<main id= "main-content" role="main" class="js-isotope search-content" data-isotope-options='{ "columnWidth": 200, "itemSelector": ".item" }'>
		 
		 <div style="clear:both"></div>

		 		<!-- Start the Loop. -->
		 <?php 
		 query_posts('showposts=10'); 
		 if ( have_posts() ) : while ( have_posts() ) : the_post();
		 	$category = get_the_category(); 
				$catName = $category[0]->slug;
			?>		 	

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
	<div style="clear:both"></div>

<?php get_footer(); ?>