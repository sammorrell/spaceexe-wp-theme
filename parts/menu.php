<div class='width-sizer' id='header-container'>
	<a id='menu-logo-container' href='<?php echo get_site_url(); ?>'>

	</a>
	<div id='header-menu-container'>
		<?php wp_nav_menu( 
			array( 
				'theme_location' => 'header',
				'container' => false
			)
		); ?>
	</div>
</div>