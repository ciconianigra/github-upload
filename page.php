<?php get_header();?>
<div id="content"> 
<div class="container">
	<main id="post-main">
		<?php if ( have_posts() ) :
    		while ( have_posts() ) : the_post();?>
				<header>
					<h1><?php the_title();?></h1>
					<div class="breadcrumb">
						<?php get_breadcrumb(); ?>	
					</div>
				<div class="entry-content">
					<p><?php the_content();?></p>
				</div>
				</header>
				<div class="clear"></div>
    		<?php endwhile;
		endif; ?>
	</main>
</div>
</div>
<div class="clear"></div>
<?php get_footer();?>