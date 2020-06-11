<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buttery
 */

?>

	<footer id="colophon" class="site-footer">
		<h1 class="pulse">Let's Connect!</h1>
		<a href="mailto:hello@sonialau.ca">hello@sonialau.ca</a>

		<div class="social-media-icons">
			<a href=""><img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/linkedin.png'); ?>" alt="LinkedIn"></a>
			<a href=""><img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/instagram.png'); ?>" alt="Instagram"></a>
			<a href=""><img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/github.png'); ?>" alt="GitHub"></a>
		</div><!-- end social media logos -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
