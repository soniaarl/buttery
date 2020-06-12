<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buttery
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'buttery' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php get_template_part('images/logo') ?>
					</a>
				</h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php get_template_part('images/logo') ?>
					</a>
				</p>
				<?php
			endif;
			$buttery_description = get_bloginfo( 'description', 'display' );
			if ( $buttery_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $buttery_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'buttery' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

			<!-- Dynamically get file path for nav bar images -->
			<style>
			@media (max-width: 1000px){
				.home-icon {
					background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/icons/nav-bar/home-office.png')); ?>') ;
				}
				.portfolio-icon {
					background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/icons/nav-bar/suitcase.png')); ?>') ;
				}
				.about-icon {
					background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/icons/nav-bar/woman.png')); ?>') ;
				}
				.contact-icon {
					background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/icons/nav-bar/contact.png')); ?>') ;
				}
			}




			</style>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

