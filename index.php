<?php get_header();?>
<div class="clear"></div>
<div id="content"> 
	
	<?php 
	$postId = [];
	$args = array(
	    'posts_per_page' => 4,
	    'post__in'  => get_option( 'sticky_posts' ),
	    'ignore_sticky_posts' => 1
	);
	$query = new WP_Query( $args );
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if($paged == 1 ):?>
		<div class="sticky-posts">
		<?php if ( $query->have_posts()) :
	    	while ( $query->have_posts() ) : $query->the_post();?>
	    		
				<div class="main">
	    			<div class="sticky-post left">
	    			
			    		<a href="<?php the_permalink();?>">
							<?php the_post_thumbnail('small_image');?>
						</a>
						<h2 class="timeline-header">
							<a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
						</h2>
					
					</div>
				
				</div>
				<?php
				$id = get_the_ID();
				$postId[] = $id;
			 endwhile;
		endif;?>
		</div>
	<?php endif;

	wp_reset_query();
	wp_reset_postdata(); 
	?>

	<div class="clear"></div>
	<div class="main">
		<div id="home-posts" class="categories">
			<main id="main" class="site-main" role="main">
				<div class="left-box">
					<?php if ( is_home() ) :?>
						<p class="category-title">Latest articles</p>
					<?php else :?>
					  <p class="category-title"><?php echo esc_html( get_search_query() ); ?></p>
					<?php endif;?>
										



					<?php 
					$args = array(
							'post_type'=> 'post',
							'posts_per_page' => 10,
							'post__not_in' => $postId,
							'paged' => $paged,
					);
					$query = new WP_Query( $args );		

						
				            
					if ( $query->have_posts() ) :
				    	while ( $query->have_posts() ) : $query->the_post(); ?>
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

<div class="clear"></div>
<?php get_footer();?>