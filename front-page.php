<?php get_header(); ?>
<div id='footer-spacer'>
<?php get_template_part('parts/home-header'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('parts/homepage-container'); ?>
	<?php endwhile; endif; ?>
	<div style='width: 100%;'></div>

</div>
<?php get_footer(); ?>
