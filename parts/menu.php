<div class='container' id='header-container'>
	<a id='menu-logo-container' href='<?php echo get_site_url(); ?>'>
	</a>
	<div id='header-menu-spacer'>
		<div id='header-menu-container'>
			<?php wp_nav_menu( 
				array( 
					'theme_location' => 'header',
					'container' => false,
					'menu_id' => 'header-main-menu',
				)
			); ?>
			
			<!-- Let's include some sidereal clock icon and search button goodness -->
			<label for='search-modal-toggle' id='search-icon' class='menu-item display-on-mobile'>
				<i class="fa fa-search"></i>
			</label>
		</div>
	</div>
</div>