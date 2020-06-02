<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buttery
 */

get_header();
get_template_part( 'template-parts/banner', 'none' ); //include banner
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'notitle' ); //remove title
			?>

			<div class="portfolio-btn"><a href="<?php echo esc_url(get_home_url().'/projects'); ?>">View Portfolio</a></div>

			<!-- Designer -->
			<section class="designer">
			<?php if( have_rows('designer') ):
					while( have_rows('designer') ): the_row(); 

						// Get sub field values.
						$title = get_sub_field('title');
						$image = get_sub_field('image'); 
						$description = get_sub_field('description');
						$logos = get_sub_field('logos'); 
						$size = 'full' ?>

						<h2><?php echo $title ?></h2> 
						<img src="<?php echo $image?>" alt="Colourful spheres">
						<p><?php echo $description?></p>
						<!-- Display logo gallery -->
						<div class="logos">
							<?php if( $logos ): ?>
								<?php foreach( $logos as $image_id ): ?>
										<?php echo wp_get_attachment_image( $image_id, $size ); ?>
								<?php endforeach; ?>
							<?php endif; ?> <!-- end logo gallery -->
						</div>
					<?php endwhile; ?>
			</section> <!-- end of designer -->
			<?php endif; ?>

			<!-- Developer -->
			<section class="developer">
			<?php if( have_rows('developer') ):
					while( have_rows('developer') ): the_row(); 

						// Get sub field values.
						$title = get_sub_field('title');
						$image = get_sub_field('image'); 
						$description = get_sub_field('description');
						$logos = get_sub_field('logos'); 
						$size = 'full' ?>

						<h2><?php echo $title ?></h2> 
						<img src="<?php echo $image?>" alt="Cute computer graphic">
						<p><?php echo $description?></p>
						<!-- Display logo gallery -->
						<div class="logos">
							<?php if( $logos ): ?>
								<?php foreach( $logos as $image_id ): ?>
										<?php echo wp_get_attachment_image( $image_id, $size ); ?>
								<?php endforeach; ?>
							<?php endif; ?> <!-- end logo gallery -->
						</div>
					<?php endwhile; ?>
			</section> <!-- end of developer -->
			<?php endif; 



			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
