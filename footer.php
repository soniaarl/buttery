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
			<a href="https://www.linkedin.com/in/sonialau/"><?php get_template_part( 'images/linkedin' ); ?></a>
			<a href="https://www.instagram.com/may_flours/"><?php get_template_part( 'images/instagram' ); ?></a>
			<a href="https://github.com/soniaarl"><?php get_template_part( 'images/github' ); ?></a>
		</div><!-- end social media logos -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
