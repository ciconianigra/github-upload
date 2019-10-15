<footer>
    
    <div class="main">
        <div class="aboutus left">
            <h3>About us</h3>
            <p><b>Audimobiles.com</b> is part of the <b>BGO Media Network.</b> We are a collaboration of auto
                related websites, covering the latest news and updates from the automotive industry.
                <b>Audimobiles.com</b> is about the best of what we all love – Cars.
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="trade">
        <div class="main">
        <nav>
			<div class="menu-amp-menu-container">
				<?php 
					wp_nav_menu( 

						array(

						      'theme_location' => 'footer_menu',
						      'menu_id' => 'menu-amp-menu',
						      'container' => 'ul',
						      'menu_class' => 'menu',
						)

				);?>    
			</div>        
		</nav>
		<div class="clear"></div>
            <p class="copyright">Copyright © 2019, <a href="https://www.bgomedia.net" target="_blank">BGO Media Network</a>. All Rights Reserved.</p>
        <div class="clear"></div>
        </div>
    </div>
    <div class="dimmer-background"></div>
</footer>
<?php wp_footer();?>
</body>
</html>