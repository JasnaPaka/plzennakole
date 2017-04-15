<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
            <div id="logo-container">
                <img src="<?php print get_stylesheet_directory_uri() ?>/images/pnk-logo.svg" alt="Logo webu" />
            </div>
			<?php wp_nav_menu(); ?>
            <div class="clear"></div>
		</div>