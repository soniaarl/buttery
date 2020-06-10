<?php ?>

<!-- Banner with intro and profile pic -->


<!-- Only display this content if it's the home page -->
<?php if ( is_front_page( ) ) { ?>
<div class="banner">
    <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2020/06/sonia.png' ) );?>" alt="Cartoon Picture of Sonia">
    <div class="banner-text">
        <h1>Hi, I'm Sonia</h1>
        <h1>Web Designer & Web Developer</h1>
    </div>
</div> <!-- end banner -->

    
    <?php }?>



<style>
    .banner {
    <?php if(is_front_page ()){?> background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/2020/06/felix-mittermeier-Knwea-mLGAg-unsplash.jpg')); ?>'); <?php }?>
    }
</style>


<?php

