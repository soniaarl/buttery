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


<!-- Main Content -->
	<main id="primary" class="site-main">

<!-- Banner -->
	<div class="banner-container">
		<div class="banner portfolio-banner"></div>
		<div class="banner-text">
			<h1>Portfolio</h1>
			<h2 class="project-intro">Explore projects I've worked on and the process behind each one</h2>
		</div>
	</div>

	<style>
		.banner{
		<?php if(get_queried_object_id() == 0){?> background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/skal/d-skal-banner.jpg')); ?>'); <?php }?>
		}
	</style>

<!-- About Overlay -->
	<?php get_template_part( 'template-parts/about'); //include about overlay ?>

<!-- Intro Content -->
	
	
	<div class="content">

		<?php $args = array(
		'post_type' => 'bt-projects',
		'posts_per_page' => -1
		); ?>


		
		<?php
		/* Start the Loop */
		$query = new WP_Query($args);
		if ($query -> have_posts()){
			while ($query -> have_posts()){
			$query -> the_post(); ?>

				<div class="project-card">
					<a href="<?php echo esc_url(get_permalink());?>">
						<!-- Get Project Title -->
						<h1><?php the_title(); ?></h1> 

						<!-- Get Project Image Card -->
							<?php if(function_exists('get_field')){
								if(get_field('project_card')){?>
									<img class="project-poster" src="<?php esc_url( the_field('project_card') );?>" alt="Website device mockup">
									<h3 class="project-btn">View Project</h3>
						<?php }
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
			}
			wp_reset_postdata();
		}?>
	

	</div> <!-- end content -->
	<?php get_template_part('template-parts/scroll-top'); ?>
	</main><!-- #main -->

<?php
get_footer();
