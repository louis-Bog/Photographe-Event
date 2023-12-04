<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<!-- <h1><?php the_title(); ?></h1> -->
    
    	
        <section class="header-hero">
		<img class="image-hero" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/titre-hero.png">
	</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>