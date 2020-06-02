<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buttery
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="project-card">
					<a href="<?php echo esc_url(get_permalink());?>">
						<!-- Get Project Title -->
						<h1><?php the_title(); ?></h1> <?php

						// Get Project Image Card
						if(function_exists('get_field')){
							if(get_field('project_card')){?>
								<img src="<?php esc_url( the_field('project_card') );?>" alt="Website device mockup"><?php
							}
						}

						// Get Project Tool Logos 
						$logos = get_field('tools_used');?>

						<div class="logos">
							<?php if( $logos ): ?>
								<?php foreach( $logos as $image_id ): ?>
									<?php echo wp_get_attachment_image( $image_id, $size ); ?>
								<?php endforeach; ?>
							<?php endif; ?> 
						</div> <!-- end project tool logos -->
					</a>
				</div> <!-- end project card -->
				
				<?php
				
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
