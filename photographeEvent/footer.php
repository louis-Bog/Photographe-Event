<footer class="footer">
	
	<nav class="footer-nav">
		<?php wp_nav_menu( array( 
			 'theme_location' => 'footer-menu', 
			 'menu_class' 		=> 'footer-nav-list', // ma classe personnalisée 
			 'menu_id'        => 'footer-nav-list',
			 'container' => 'false'
			) ); ?>
			<?php get_template_part('template-parts/modal'); ?>
		</nav>
	</footer>
  
	<?php wp_footer(); ?>
</body>
</html>