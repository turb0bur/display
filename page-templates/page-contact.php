<?php
/*
Template Name: Page Contact
*/
?>

<?php get_header() ?>

<div class="ba-headline">
	<div class="ba-container">
		<h1 class="ba-main-title"><?php the_field('section_headline') ?></h1>
	</div>
</div>

<?php

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

<!-- <div class="ba-map"></div> -->

<div class="ba-container ">
	<div class="ba-grid">
		<div class="ba-width-medium-2-3 ba-contact-form">
			<h2 class="ba-title"><?php the_field('contact_form_title') ?></h2>
			<p class="ba-contact-form__description"><?php the_field('contact_form_description'); ?></p>
			<?php the_field('contact_form') ?>
		</div>
		<!-- End ba-width-2-3 -->

		<div class="ba-width-medium-1-3">
			<aside class="ba-contact-info vcard ba-text-left">
				<h2 class="ba-title"><?php the_field('contact_information_title') ?></h2>
				<div class="ba-contact-info__note note"><?php the_field('contact_information_notes') ?></div>
				<span>email:</span><a href="mailto:info@display.com" class="ba-contact-info__email email"><?php the_field('email') ?></a>
				<span>phone:</span><a href="tel:1.306.222.4545" class="ba-contact-info__tel tel"><?php the_field('phone') ?></a>
				<div class="ba-contact-info__adr adr">
					<div class="street-address"><?php the_field('street') ?></div>
					<span class="locality"><?php the_field('locality') ?></span>,
					<abbr class="region" title="Saskatchewan"><?php the_field('region') ?></abbr>
					<span class="postal-code"><?php the_field('postal_code') ?>6</span>
				</div>
			</aside>
			<!-- End ba-contact-info -->

			<aside class="ba-store-hours">
				<h2 class="ba-title">Store Hours</h2>
				<div class="ba-store-hours__days">
					<span>Monday - Thursday</span>
					<span>Friday</span>
					<span>Saturday</span>
					<span>Sunday &amp; Holidays</span>
				</div>
				<div class="ba-store-hours__hours">
					<span>8 am - 5 pm</span>
					<span>8 am - 6 pm</span>
					<span>9 am - 5 pm</span>
					<span>Closed</span>
				</div>
			</aside>
			<!-- End ba-store-hours -->

		</div>
		<!-- End ba-width-1-3 -->

	</div>
	<!-- End ba-grid -->
</div>

<?php get_footer() ?>
