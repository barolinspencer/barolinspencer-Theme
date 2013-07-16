<!DOCTYPE html>
<!-- html BEGIN -->
<html>
<!-- head BEGIN -->
<head>
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<!-- Title -->
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- Theme Hook -->
	<?php wp_head(); ?>
	
</head><!-- head END -->
<!-- body BEGIN -->
<body>  

	<!-- .container BEGIN -->
	<div class="container">
	
	<!-- #header BEGIN -->
	<div id="header" class="clearfix">
	
		<!-- #logo BEGIN -->
		<div id="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
		</div><!-- #logo END -->
				
	</div><!-- #header END -->
  
