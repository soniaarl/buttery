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

		<!-- Banner -->
		<div class="banner-container">
			<div class="banner portfolio-banner"></div>
			<div class="banner-text">
				<h1><?php the_title();?></h1>
			</div>
		</div><!-- end banner-container -->

		<!-- Set background image dynamically -->
		<style>
			.banner{
				<?php if(get_queried_object_id() != 0)
				{?> background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>'); 
				<?php }?>
			}
		</style>

		<!-- About Overlay -->
		<?php get_template_part( 'template-parts/about'); //include about overlay ?>

			<div class="content">

				<!-- Project Brief -->
				<section class="project-brief">
					<h2>Project Brief</h2>
					<?php the_content(); ?>
					<p> <?php
						if ( function_exists ( 'get_field' ) ) {
							if ( get_field( 'project_brief' ) ) {
							the_field( 'project_brief' );
								}
						}?>
					</p>
					<!-- Link Buttons -->
				
					<?php if(have_rows('links')): ?>
							<section class="link-btns"> <?php
							while(have_rows('links')) : the_row();?>
							
							<?php if(get_sub_field('live_link')):?><a href="<?php the_sub_field('live_link');?>">View Live</a> <?php endif; ?>
							<?php if(get_sub_field('github_link')):?><a href="<?php the_sub_field('github_link');?>">View GitHub</a> <?php endif; ?>
							
						<?php endwhile;?>
						</section> <?php
							endif; ?>
				</section>
				
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
					<?php if($image):?><img class="colour-swatches rightslide" src="<?php echo $image?>" alt="Colour swatches"><?php endif; ?>
				<?php endif;?>

				<!-- Mockups -->
				<?php if( have_rows('mockups') ): ?>
					<section class="mockups">
					<?php while( have_rows('mockups') ): the_row(); 
					$image = get_sub_field('image');
					$description = get_sub_field('description'); ?>

					<p><?php echo $description?></p>
					<!-- Check if image exists before outputting image tag -->
					<?php if($image):?><img class="leftslide" src="<?php echo $image?>" alt="Mockups"><?php endif; ?>
				
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
				
				<h2>Other Projects</h2>
			</div> <!-- end content -->

			<?php 
			// Gets current post id to exclude in bottom links
			$args = array(
				'post_type' => 'bt-projects',
				'posts_per_page' => 3,
				'orderby' => 'rand',
				'post__not_in' => array(get_the_ID()) // Exclude current post id
				
			); ?>

			<section class="other-projects"> 
				<?php $query = new WP_Query($args);
					if ($query -> have_posts()){
						while ($query -> have_posts()){
							$query -> the_post(); 
							
							?>
								<div class="project-card">
									<a href="<?php the_permalink(); ?>">
										<h1><?php the_title(); ?></h1>
										<!-- Get Project Image Card -->
										<?php if(function_exists('get_field')){
												if(get_field('project_card')){?>
													<img class="project-poster" src="<?php esc_url( the_field('project_card') );?>" alt="Website device mockup">
													<h3 class="project-btn">View Project</h3>
										<?php }
										}?>
									</a>
								</div> <!-- end project-card --> <?php
						}
						wp_reset_postdata();
					}
				?>
			</section> <!-- end other-projects -->
			
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	
	get_template_part('template-parts/scroll-top'); ?>

	</main><!-- #main -->

<?php
get_footer();
