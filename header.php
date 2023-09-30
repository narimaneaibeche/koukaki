<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    

    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        
         <ul>
            <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="title-site-a"><?php bloginfo( 'name' ); ?></a></li>
            <li> <a href="#" id="openBtn" classe="openBtn">
                     <div class="burger-icon">
                       <span class="burger-icon">
                           <span></span>
                           <span></span>
                           <span></span>
                      </span>
                      </div>
                  </a>
                  
                  <a id="closeBtn" href="#" class="close">&times;</a>
            </li>
            
        </ul>
       </nav>
       
   
       
      <div id ="backdrop" class="backdrop">
           <ul >
               <li><img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/log.png'; ?> " class="log"  alt="logo" ></li>
               <li class="a-menu"><a href="#story" >Histoire </a></li>
               <li class="a-menu"><a href="#characters" >Personnages</a></li>
               <li class="a-menu"><a href="#place" >Lieu</a></li>
              <li class="a-menu"><a href="##studio" >Studio Koukaki</a></li>  
              <li class="a-menu"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/studio.png'; ?> " class="koukaki"  alt="logo" ></li>  
          </ul>
        
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/cat2.png'; ?> " class="cat2"  alt="image montre un chat" >
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/cat1.png'; ?> " class="cat1"  alt="image montre un chat" >
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/cat.png'; ?> " class="cat"  alt="image montre un chat" >
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/orchid.png'; ?> " class="orchid"  alt="image montre une fleur" >
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/Flower.png'; ?> " class="flower"  alt="image montre une fleur" >
          
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/Sunflower.png'; ?> " class="sunflower"  alt="image montre une fleur" >
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/random_flower.png'; ?> " class="random"  alt="image montre une fleur" >
          
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/menu/hibiscus2.png'; ?> " class="hibiscuss"  alt="image montre une fleur" >  
     
        </div>
        </header>  
       


        
		<!-- #site-navigation -->
        <!-- #masthead -->
       
   

