<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Akis custom header
 * @since Akis 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Latest compiled and minified CSS -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<!--<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>-->

			<nav id="primary-navigation" style="margin-right: -30px;" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
	
<style>
#toggle-button {
border: 0;
display: inline-block;
right:0;
position: relative;
-webkit-transition: all .5s ease-out;
-moz-transition: all .5s ease-out;
-ms-transition: all .5s ease-out;
-o-transition: all .5s ease-out;
transition: all .5s ease-out;    

}

.rotate {
-moz-transform: rotate(+90deg);
-webkit-transform: rotate(+90deg);
-ms-transform: rotate(+90deg);
-o-transform: rotate(+90deg);
}

.site-header.shrink {
    height: 50px;
    line-height:30px;
	    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.site-title.shrink  {
font-size:15px;
line-height:48px;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
li#menu-item-8.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-8.shrink {
border: 0;
display: inline-block;
height: 40px;
line-height: 50px;
position: relative;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
li#menu-item-18.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-18.shrink {
border: 0;
display: inline-block;
height: 40px;
line-height: 50px;
position: relative;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
li#menu-item-106.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-106.shrink {
border: 0;
display: inline-block;
height: 40px;
line-height: 50px;
position: relative;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
li#menu-item-16.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-16.shrink {
border: 0;
display: inline-block;
height: 40px;
line-height: 50px;
position: relative;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
li#menu-item-21.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-21.shrink  {
border: 0;
/* top: -17px;
 */display: inline-block;
line-height: 45px;
position: relative;
-webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
div#click-menu.shrink {
margin-top: -14px;
}
</style>


<!-- Akis smooth load -->

<?php if(is_home() ) { ?>


<?php } else { ?>


<?php } ?> 
<script>

<!-- Akis smooth load END -->

	$('#menu-item-8').hide();
	$('#menu-item-18').hide();
	$('#menu-item-106').hide();
	$('#menu-item-16').hide();
	
	$('#toggle-button').click(function() {
		$('#menu-item-8').fadeToggle();
		$('#menu-item-106').fadeToggle();
		$('#menu-item-18').fadeToggle();
		$('#menu-item-16').fadeToggle();
		
	});
			
$("#toggle-button").on("click", function () {
    $(this).toggleClass("rotate");
});




$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.site-header').addClass('shrink');
		   $('.site-title').addClass('shrink');
		   $('div#click-menu').addClass('shrink');
		   $('li#menu-item-21.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-21').addClass('shrink');
		   $('li#menu-item-8.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-8').addClass('shrink');
		   $('li#menu-item-18.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-18').addClass('shrink');
		   $('li#menu-item-106.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-106').addClass('shrink');
		   $('li#menu-item-16.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-16').addClass('shrink');
        }
        else {
            $('.site-header').removeClass('shrink');
            $('.site-title').removeClass('shrink');
			$('div#click-menu').removeClass('shrink');
            $('li#menu-item-21.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-21').removeClass('shrink');
            $('li#menu-item-16.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-16').removeClass('shrink');
            $('li#menu-item-106.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-106').removeClass('shrink');
            $('li#menu-item-18.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-18').removeClass('shrink');
            $('li#menu-item-8.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-8').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});


</script>
		</div>
			
		<!--<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>-->
	</header><!-- #masthead -->

	<div id="main" class="site-main">