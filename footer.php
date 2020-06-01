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
		<h2>Let's Connect!</h2>
		<h2>sonialau5268@gmail.com</h2>

		<div class="social-media-icons">
			<img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/linkedin.png'); ?>" alt="LinkedIn">
			<img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/instagram.png'); ?>" alt="Instagram">
			<img src="<?php echo esc_url(get_home_url().'/wp-content/uploads/icons/footer/github.png'); ?>" alt="GitHub">
		</div><!-- end social media logos -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
