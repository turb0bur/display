<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="ba-header">
		<div class="ba-container cf">
			<a href="#" class="ba-logo">
				<img src="<?php header_image() ?>" alt="<?php bloginfo('name') ?>">
			</a>
				<?php if (have_rows('social_icon', 'options')) : ?>
					<!-- Begin Social Icons -->
					<ul class="ba-social ba-float-right">
					 <?php while (have_rows('social_icon', 'options')) : the_row(); ?>
						<li class="ba-social__item">
							<a href="<?php the_sub_field('social_link') ?>" class="ba-social__link" target="_blank"></a>
						</li>
					 <?php endwhile; ?>
					</ul>
					<!-- End Social Icons-->
				<?php endif; ?>
			<nav>
				<button class="ba-toggle">
					<span class="ba-toggle__icon"></span>
				</button>
				<div class="ba-overlay"></div>

				<?php wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_class' => 'ba-main-menu',
						'container' => 'false'
						)
					);
				?>
			</nav>
		</div>
		<!-- End container for header -->
	</header>
	<main role="main" >
