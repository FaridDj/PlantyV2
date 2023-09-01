<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Syne:wght@600;800&display=swap');
</style>


<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div class=navigation>
<div class=logo>
<?php
if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
}
?>
</div>


<div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</nav>
</div>

</div>

</header>
<div id="container">
<main id="content" role="main">