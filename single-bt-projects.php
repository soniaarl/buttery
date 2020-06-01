<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package buttery
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );?>

			<!-- Project Brief -->
		    <section class="project-brief">
				<h2>Project Brief</h2>
				<p> <?php
    				if ( function_exists ( 'get_field' ) ) {
						if ( get_field( 'project_brief' ) ) {
						the_field( 'project_brief' );
        					}
    				}?>
				</p>
			</section>

			<!-- Design Process -->
			<section class="design-process">
			<h2>Design</h2>
			<?php if( have_rows('design') ): ?>
       			<?php while( have_rows('design') ): the_row(); 

            // Get sub field values.
            $tools = get_sub_field('tools');
            $description = get_sub_field('description');
            $image = get_sub_field('swatches'); ?>

			<p class="design-tools">//<?php echo $tools?></p>
			<p class="design-description"><?php echo $description?></p>
			<!-- Check if image exists before outputting image tag -->
			<?php if($image):?><img src="<?php echo $image?>" alt="Colour swatches"><?php endif; ?>


			<!-- Mockups -->
			<?php if( have_rows('mockups') ): ?>
    			<section class="mockups">
        		<?php while( have_rows('mockups') ): the_row(); 
				$image = get_sub_field('image');
				$description = get_sub_field('description'); ?>

				<p><?php echo $description?></p>
				<!-- Check if image exists before outputting image tag -->
				<?php if($image):?><img src="<?php echo $image?>" alt="Mockups"><?php endif; ?>
			
        		<?php endwhile; ?>
				</section>
			<?php endif; // End mockups

        		  endwhile; ?> <!-- end design process -->
			<?php endif; ?> <!-- end design process -->
			</section><!-- end design process -->

			<!-- Development Process -->
			<section class="development">
			<h2>Development</h2>
			<?php if( have_rows('development') ):
				  	while( have_rows('development') ): the_row(); 

					// Get sub field values.
					$tools = get_sub_field('tools');
					$description = get_sub_field('description'); ?>

					<p><?php echo $tools ?></p>
					<p><?php echo $description ?></p>

				<?php endwhile; ?>
				</section> <!-- end of development -->
			<?php endif; ?>

			<!-- Takeaways -->
			<section class="takeaways">
				<h2>Takeaways</h2>
				<p> <?php
    				if ( function_exists ( 'get_field' ) ) {
						if ( get_field( 'takeaways' ) ) {
						the_field( 'takeaways' );
        					}
    				}?>
				</p>
			</section><!-- end takeaways -->

			<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'buttery' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'buttery' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
