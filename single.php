<?php get_header();?>
<div id="content"> 
    <div class="container">
        <main id="post-main">

            <?php while ( have_posts() ) :
                the_post();?>

                <article id="post-<?php the_ID(); ?>" class="content single-content">     
                    <header id="header">
                        <?php
                        if ( is_singular() ) :
                            
                            the_title( '<h1>', '</h1>' );?>
                            <div class="breadcrumb">
                                <p> <?php get_breadcrumb(); ?></p>            
                            </div>
                        <?php else :
                            the_title( '<h2>','</h2>' );
                        endif;?>

                        <div class="entry-content">
                            <?php
                            the_content();
                            ?>
                            
                        </div>
        
                        <aside class="right-box sidebar">
                            <div id="ads">
                                <div class="ads ads250"></div>
                                <div class="ads ads600"></div>
                            </div>
                        </aside>        
                    </header>
                </article>

                <div class="entry-content">
                    <?php if ( comments_open() || get_comments_number() ) :
                    comments_template();
                    endif;?>
                </div>
                
            <?php endwhile; ?>
            <div class="clear"></div>
           
           
        </main>
    </div>
</div>
<div class="clear"></div>
<?php
get_footer();