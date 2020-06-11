<div class="about-overlay">
		<?php
		// Load the intro section from a separate page using WP_Query()
		// The page_id is the ID of the About page, where we added the text
		$args = array('page_id' => 12);
		
		$about_page = new WP_Query( $args );

		if($about_page -> have_posts() ){
			while($about_page -> have_posts()){
				$about_page -> the_post();
				the_content();
			}
			wp_reset_postdata();
		}
		?>
</div>