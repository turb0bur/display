</main>
<footer class="ba-footer">
	<!-- Begin Section Callout-2 -->
	<section class="ba-section ba-callout-2">
		<div class="ba-container cf">
			<h2 class=" ba-title ba-title--callout-2 ba-float-left"><?php the_field('main_text', 'options') ?></h2>
			<a class="ba-button ba-float-right" href="<?php the_field('link', 'options') ?>"><?php the_field('link_text', 'options') ?></a>
		</div>
	</section>
	<!-- End Section Callout-2 -->
	<div class="ba-container cf">
		<p class="ba-copyright ba-float-left"><?php the_field('copyright', 'options') ?></p>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'footer-menu',
				'menu_class' => 'ba-nav',
				'container' => 'false'
				)
			);
		?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
