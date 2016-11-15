<?php
/*
Template Name: Front Page
*/
 ?>

<?php get_header(); ?>
	<div class="ba-promo">
		<div class="ba-container">
			<?php
			$sliderArgs = array(
				'post_type'=>'slide',
				'posts_per_page'=>-1,
					// 'orderby'=>'',
				'order'=>'ASC'
				);
				$slider = new WP_Query($sliderArgs);?>
				<?php if($slider->have_posts()): ?>
			<!-- Begin Promo Slider -->
			<div class="ba-promo-slider">

				<?php while($slider->have_posts()): ?>
					<?php $slider->the_post() ?>
					<div <?php post_class( 'ba-promo-slider__slide' )?>>
						<?php the_post_thumbnail('slide') ?>
					</div>
				<?php endwhile; ?>
			</div>
			<?php endif;?>
			<?php wp_reset_postdata(); ?>

			<!-- End Promo Slider -->
		</div>
	</div>
	<!-- End Promo -->
	<!-- Begin Section Callout-1 -->
	<section class="ba-section ba-callout-1">
		<div class="ba-container ba-text-center">
			<p class="ba-callout-1__description"><?php the_field('text') ?></p>
			<a class="ba-button" href="<?php the_field('button') ?>">Browse Portfolio</a>
		</div>
	</section>
	<!-- End Section Callout-1 -->
	<!-- Begin Section Video -->
	<section class="ba-section ba-video">
		<div class="ba-container cf">
			<div class="ba-video__container ba-float-left">
				<?php the_field('video') ?>
			</div>
			<div class="ba-video-description ba-float-left">
				<h2 class="ba-title ba-title--video"><?php the_field('video_headline') ?></h2>
				<?php the_field('video_description') ?>
			</div>
		</div>
	</section>
	<!-- End Section Video -->
	<!-- Begin Section Portfolio -->
	<section id="portfolio" class="ba-section ba-portfolio ba-text-center">
		<h2 class="ba-title ba-title--portfolio"><?php the_field('portfolio_headline') ?></h2>
		<p class="ba-portfolio__description"><?php the_field('portfolio_text') ?></p>

			<!-- Begin Photo Slider -->
			<?php
			$worksArgs = array(
				'post_type'=>'work',
				'posts_per_page'=>5,
					// 'orderby'=>'',
				'order'=>'ASC'
			);
			$works = new WP_Query($worksArgs);?>
			<?php if($works->have_posts()): ?>
			<div class="ba-portfolio-slider-photo">
				<?php while($works->have_posts()): $works->the_post() ?>

					<div class="ba-portfolio-slider-photo__slide">
						<a href="<?php the_post_thumbnail_url('full') ?>" <?php post_class('swipebox') ?> title="<?php the_title() ?>">
							<?php the_post_thumbnail('thumbnail') ?>
							<div class="ba-portfolio-slider-photo__cover">
								<?php get_template_part('partials/photo', 'cover') ?>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
			<!-- End Photo Slider -->
		<div class="ba-container">
			<!-- Begin Text Slider -->
			<div class="ba-portfolio-slider-text ba-text-center">
				<?php while($works->have_posts()): $works->the_post() ?>

					<div class="ba-portfolio-slider-text__slide">
						<h3 class="ba-portfolio-slider-text__title"><?php the_title() ?></h3>
						<?php the_content() ?>
					</div>
				<?php endwhile; ?>

				<?php get_template_part('partials/arrow', 'prev') ?>
				<?php get_template_part('partials/arrow', 'next') ?>
			</div>
			<!-- End Text Slider -->
		</div>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	</section>
	<!-- End Section Portfolio -->

<?php get_footer() ?>
