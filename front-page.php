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
?>

	<main id="primary" class="site-main"> 
	<?php get_template_part( 'template-parts/banner'); //include banner 
	get_template_part( 'template-parts/about'); //include about overlay ?>

	<div class="content">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			
			<div class="profile-cta">
				<!-- Desktop CTA image -->
				<?php if(function_exists('get_field')){
					if(get_field('desktop_image')){?>
						<img class="desktop-devices" src="<?php echo get_field('desktop_image')?>" alt="Laptop, ipad, and cellphone">
						<?php
					}
				}?>

				<div class="cta-text raise">
					<?php get_template_part( 'template-parts/content', 'notitle' ); //remove title?>
					<div class="portfolio-btn"><a href="<?php echo esc_url(get_home_url().'/projects'); ?>">View Portfolio</a></div>
				</div><!-- end cta-text -->
			</div><!-- end profile-cta -->


			<div class="skills-cards">
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
						<img class="designer-logo card-logo" src="<?php echo $image?>" alt="Colourful spheres">
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
						<img class="developer-logo card-logo" src="<?php echo $image?>" alt="Cute computer graphic">
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
			</div> <!-- end skills-card -->
			<?php endif; 

		
		endwhile; // End of the loop.
		?>
	</div> <!-- end content -->


	<?php get_template_part('template-parts/scroll-top');?>
	</main><!-- #main -->

<?php

get_footer();
