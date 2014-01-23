<html>
	<head>
		<title><?php echo get_bloginfo() ?> | <?php echo get_the_title(); ?></title>
		<meta property="og:image"content="<?php echo get_bloginfo('template_directory') ?>/assets/img/the-platform-logo.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory') ?>/assets/css/landing.css">
	</head>
	<body>
		<section>
			<div class="content"></div>
		</section>
		<section>
			<div class="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</section>
	</body>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-26588142-6', 'theplatformnc.com');
	  ga('send', 'pageview');

	</script>
	<?php wp_footer(); ?>
</html>

