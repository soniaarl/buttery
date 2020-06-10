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
			the_post();?>

		<div class="banner-container">
			<div class="banner portfolio-banner"></div>
			<div class="banner-text">
				<h1><?php the_title();?></h1>
			</div>
		</div><!-- end banner-container -->

		<style>
			.banner{
				<?php if(get_queried_object_id() != 0)
				{?> background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>'); 
				<?php }?>
			}
		</style>


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

			<!-- Link Buttons -->
			
					<?php if(have_rows('links')): ?>
						<section class="link-btns"> <?php
						while(have_rows('links')) : the_row();?>
						
						<a href="<?php the_sub_field('live_link');?>">View Live</a>
						<a href="<?php the_sub_field('github_link');?>">View GitHub</a>
						
					<?php endwhile;?>
					</section> <?php
						endif; ?>
			

			<!-- Design Process -->
			<section class="design-process">
			
			<?php if( have_rows('design') ):
       			while( have_rows('design') ): the_row(); 

            // Get sub field values.
            $tools = get_sub_field('tools');
            $description = get_sub_field('description');
			$image = get_sub_field('swatches'); 
			
			if($tools):?> <!-- Check if there's values before outputting -->
				<h2>Design</h2>
				<p class="design-tools">//<?php echo $tools?></p>
				<p class="design-description"><?php echo $description?></p>
				<!-- Check if image exists before outputting image tag -->
				<?php if($image):?><img src="<?php echo $image?>" alt="Colour swatches"><?php endif; ?>
			<?php endif;?>

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
			
			<?php if( have_rows('development') ):
				  	while( have_rows('development') ): the_row(); 

					// Get sub field values.
					$tools = get_sub_field('tools');
					$description = get_sub_field('description'); 
					
					if($tools) :?>
					<h2>Development</h2>
						<p>//<?php echo $tools ?></p>
						<p><?php echo $description ?></p>
					<?php endif;?>
				<?php endwhile; ?>
				</section> <!-- end of development -->
			<?php endif; ?>

			<!-- Takeaways -->
			<section class="takeaways">
				<?php
    				if ( function_exists ( 'get_field' ) ) {
						if ( get_field( 'takeaways' ) ) { ?>
						<h2>Takeaways</h2>
						<P><?php the_field( 'takeaways' ); ?></p> <?php
        					}
    				}?>
			</section><!-- end takeaways -->

			<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Project:', 'buttery' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Project:', 'buttery' ) . '</span> <span class="nav-title">%title</span>',
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
