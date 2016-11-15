<?php get_header(); ?>

<div class="ba-headline">
	<div class="ba-container">
		<h1 class="ba-main-title">All My Works</h1>
	</div>
</div>
<div class="ba-container">
	<?php
	$worksArgs = array(
		'post_type'=>'work',
		'posts_per_page'=>-1,
		// 'orderby'=>'',
		'order'=>'ASC'
		);
		$works = new WP_Query($worksArgs);?>
		<?php if($works->have_posts()): ?>
			<div class="ba-filters filters-button-group">
				<button class="ba-filter" data-filter="*">All</button>
				<?php $categories = get_categories()?>
				<?php for($i = 0, $size = count($categories); $i < $size-1; ++$i): ?>
				<button class="ba-filter" data-filter=".<?php echo $categories[$i]->cat_name; ?>"><?php echo $categories[$i]->cat_name ; ?></button>
				<?php endfor; ?>
			</div>
			<!-- End ba-filters -->
		</div>
		<div class="ba-container">
			<div class="ba-grid ba-works cf">
				<?php while($works->have_posts()): $works->the_post() ?>
					<div class="ba-works__work <?php foreach( get_the_category() as $category ) {echo $category->cat_name . ' ';} ?>">
						<a href="<?php the_post_thumbnail_url('full') ?>" <?php post_class('swipebox') ?> title="<?php the_title() ?>">
							<?php the_post_thumbnail('thumbnail') ?>
							<div class="ba-works__cover">
								<?php get_template_part('partials/photo', 'cover') ?>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif;?>

<?php get_footer(); ?>
