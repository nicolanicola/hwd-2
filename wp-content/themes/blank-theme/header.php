<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
	<head>
		
		<!-- BLANK Theme by DigWP.com -->
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>
		
		<div class="wrap">
			
			<div class="header">
				<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>