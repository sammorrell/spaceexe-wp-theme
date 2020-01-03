<!doctype html>

<html>
<head>

	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />

    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

	<?php wp_head(); ?>

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

	<!-- ScrollMagic - For te scrolling background -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var controller = new ScrollMagic.Controller();
        var tween = TweenMax.to(".background-cover", 1, {className: "+=show-background"});
        var scene = new ScrollMagic.Scene({triggerElement: "#background-cover-trigger", duration: 200, offset: -50}).setTween(tween)
        //.addIndicators({name : 'tween css class'})
        .addTo(controller);
      }); 
    </script>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700,300">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">

</head>
<body>

<!-- Include the template and code for the model search box -->
<?php get_template_part('parts/search-modal'); ?>