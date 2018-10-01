<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evemoo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/vendor/owl.carousel.min.css">


			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/vendor/owl.theme.default.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'evemoo' ); ?></a>

<div id="sidemenu" style="overflow: scroll;">
  <ul>
   <?php
wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_extra_menu_class' ) );
?>
  
    
  </ul>
  <div class="closesidebar">
    <i class="fas fa-times"></i>
  </div>
  
</div>
<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#">
    <i class="fas fa-bars hamburger"></i>
  </a>
 

    <ul class="navbar-nav mr-left mt-0 mt-lg-0">
      <li class="nav-item active">
        <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/image/logo.png"></a>
      </li>
      
    </ul>
<ul class="navbar-nav mr-left mt-2 mt-lg-0 social_media">
  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
  <li><a href=""><i class="fab fa-twitter"></i></a></li>
  <li><a href=""><i class="fab fa-youtube"></i></a></li>
  <li><a href=""><i class="fab fa-pinterest-p "></i></a></li>
</ul>  
 
  </div>
</nav>
</div>
