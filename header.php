<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'master' ); ?></a>
	<header class="main-header">
	    <div class="container">
	    	<div class=" d-flex align-items-center justify-content-center">
		    	<div id="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<?php
					endif;
					$master_description = get_bloginfo( 'description', 'display' );
					if ( $master_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $master_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->			
	    	</div>
	    	<div class=" d-flex align-items-center justify-content-center menu-container">
	    	<div id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
	            	</button><!-- .menu-toggle -->
	            	<div class="main-menu menu-caret">
						<?php
							if (has_nav_menu('menu-1')) {
			                    wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'container' => 'ul',
									'menu_class'      => ''
								));
			                }
		                ?>
		            </div>
				</div><!-- #site-navigation -->
			</div>
	    </div>
 	</header>
	