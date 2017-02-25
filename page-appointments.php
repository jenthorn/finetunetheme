<?php

/*
	Template Name: Appointments Page
*/

get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="intro-heading">
		<div class="wrapper">
			<h1><?php the_field('heading'); ?></h1>
			<button class='appointment-click'><?php the_field('booking_button'); ?></button>
		</div>
	</section>

	<section class="services">
		<?php $servicesCount = 0; ?>
		<?php if( have_rows('services')): ?>
				<?php while( have_rows('services')): the_row(); ?>

					<?php if ($servicesCount % 2 === 0) : ?>
						<div class="services__row">
							<div class="photo">
								<img src="<?php the_sub_field('photo') ?>" alt="">
							</div>
							<div class="bio">
								<div class="wrapper">
									<h4><?php the_sub_field('title') ?></h4>
									<p><?php the_sub_field('content') ?></p>
									<?php if (get_sub_field('include_button')): ?>
										<button class='appointment-click'><?php the_field('booking_button'); ?></button>
									<?php endif;?>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="services__row">
							<div class="bio">
								<div class="wrapper">
									<h4><?php the_sub_field('title') ?></h4>
									<p><?php the_sub_field('content') ?></p>
									<?php if (get_sub_field('include_button')): ?>
										<button class='appointment-click'><?php the_field('booking_button'); ?></button>
									<?php endif;?>
								</div>
							</div>
							<div class="photo">
								<img src="<?php the_sub_field('photo') ?>" alt="">
							</div>
						</div>
					<?php endif; ?>
					<?php $servicesCount++; ?>
				<?php endwhile; ?>
		<?php endif; ?>
	</section>


	<div class="booking__overlay">
		<div class="booking__overlay-content">
			<div class="booking__overlay-close">&#10005;</div>
			<iframe src="https://ftpilates.resurva.com/book?embedded=true" name="resurva-frame" frameborder="0" width="800" height="450" style="max-width:100%"></iframe>
		</div>
	</div>

<?php endwhile; // end the loop?>

<?php get_footer(); ?>
