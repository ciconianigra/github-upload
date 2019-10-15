<?php get_header();?>
<div class="clear"></div>
<div id="content"> 
	<div class="clear"></div>
	<div class="main">
		<div id="home-posts" class="categories">
			<main id="main" class="site-main" role="main">
				<div class="left-box">
					  <p class="category-title"><?php single_cat_title(); ?></p>
					<?php 

						
				            
					if ( have_posts() ) :
				    	while ( have_posts() ) : the_post(); ?>
				    		<article>
								<picture>
									<a href="<?php the_permalink();?>">
										<?php if ( has_post_thumbnail() ) {
	    									the_post_thumbnail('small_image');
										}?>
									</a>
								</picture>
								<header>
									<h2 class="timeline-header">
										<a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
									</h2>
								</header>
								<div class="excerpt">
									<p><?php the_excerpt();?></p>
								</div>
								<div class="clear"></div>
							</article>
							<hr>
    				<?php							
					endwhile;
					endif; 
					?>
				
					<div id="custom_pagination">
						<?php 
								$args = array(
									'prev_text'          => __('« Previous'),
									'next_text'          => __('Next »'),
									'type'               => 'plain',
								);
								echo paginate_links( $args);
						?>	
					</div>
											
				</div>
			
				<aside class="right-box sidebar">
					<div id="ads">
						<div class="ads ads250"></div>
						<div class="ads ads600"></div>
					</div>
				</aside>			
			</main>
		</div>
	</div>

</div>
</div>
<div class="clear"></div>
<?php get_footer();?>