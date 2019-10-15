<!doctype html>
<html lang="en-US">
<head>
	<?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    
<!-- This site is optimized with the Yoast SEO plugin v11.8 - https://yoast.com/wordpress/plugins/seo/ -->
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<div id="mobile-indicator"></div>
<header id="masthead" class="site-header" role="banner">
    <nav role="navigation" class="site-navigation main-navigation">
        <div class="menu-container ">
            <div id="menu">
                <div class="navbar container">
                    <div class="hamburger hamburger--collapse">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/muscle-logo.png" alt="Muscle vehicles logo">
                    </a>
                    <div class="mglass"></div>
                    <form method="get" id="searchform" action="<?php echo home_url()?>" role="search">
                        <input type="text" class="field search" name="s" value="<?php echo get_search_query();?>" id="s" placeholder="Search &hellip;"/>
                        <input type="submit" class="submit" name="submit" id="searchsubmit" value=""/>
                    </form>
                </div>
                <div id="main-menu-container">
                    <div class="container main-menu-container">
                        <div id="topics">
							<div class="menu-main-menu-container">
								<?php 
						                wp_nav_menu( 

						                        array(

						                                'theme_location' => 'pages_menu',
						                                'menu_id' => 'menu-main-menu',
						                                'container' => 'ul',
						                                'menu_class' => 'main',
						                        )

						        		);?>    
							</div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
