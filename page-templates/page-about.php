<?php
/*
Template Name: Page About
*/
 ?>

 <?php get_header() ?>

<div class="ba-headline">
	<div class="ba-container">
		<h1 class="ba-main-title"><?php the_title() ?></h1>
	</div>
</div>
<section class="ba-section ba-about">
	<div class="ba-container">
		<?php $image = get_field('boss_photo');?>

			<?php if( !empty($image) ): ?>
				<img class="ba-about__img ba-float-left" src="<?php echo $image['sizes']['boss_photo'] ?>" alt="<?php echo $image['alt'] ?>">
			<?php endif; ?>

		<?php the_field('text_about_company') ?>
	</div>
</section>
<div class="ba-container">
	<div class="ba-grid">
		<div class="ba-width-1-2">
			<section class="ba-section ba-mission">
				<h2 class="ba-title"><?php the_field('company_mission_title') ?></h2>
				<?php the_field('company_mission_text') ?>
			</section>
		</div>
		<div class="ba-width-1-2">
			<section class="ba-section ba-funfacts">
				<h2 class="ba-title"><?php the_field('company_facts_title') ?></h2>
				<?php the_field('company_facts_text') ?>
			</section>
		</div>
	</div>
	<!-- End ba-grid -->
</div>
<!-- End ba-container for grid-->
<section class="ba-services">
	<div class="ba-container">
		<h2 class="ba-title"><?php the_field('services_title') ?></h2>
	</div>
	<?php if (have_rows('service')) : ?>
		<div class="ba-services__line">
			<div class="ba-container">
				<!-- <div class="ba-grid"> -->
					<!-- <div class="ba-width-small-1-4"> -->
					<div class="ba-services__box">
						<?php while (have_rows('service')) : the_row(); ?>
								<a href="#" class="ba-services__link">
									<img class="ba-services__img" src="<?php the_sub_field('service_image') ?>" alt="<?php the_sub_field('service_title') ?>">
									<h3 class="ba-services__title"><?php the_sub_field('service_title') ?></h3>
								</a>
						<?php endwhile; ?>
					</div>
					<!-- </div> -->
				<!-- </div> -->
			</div>
			<!-- End container for services -->
		</div>
		<div class="ba-container ba-services-description">
			<div class="ba-container">
		<?php while (have_rows('service')) : the_row(); ?>
			<div class="ba-services-description__item">
				<?php the_sub_field('service_description') ?>
			</div>
		<?php endwhile; ?>
		</div>
		</div>
	<?php endif; ?>
</section>

<?php get_footer() ?>
