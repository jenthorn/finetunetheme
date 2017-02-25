<?php

/*
	Template Name: Appointments Page
*/

get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="intro-heading">
		<div class="wrapper">
			<h1><?php the_field('heading'); ?></h1>
			<button><?php the_field('booking_button'); ?></button>
		</div>
	</section>

	<section class="services">
		<?php if( have_rows('services')): ?>
				<?php while( have_rows('services')): the_row(); ?>

					<div class="photo">
						<img src="<?php the_sub_field('photo') ?>" alt="">
					</div>
					<div class="bio">
						<div class="wrapper">
							<h4><?php the_sub_field('title') ?></h4>
							<p><?php the_sub_field('content') ?></p>
						</div>
					</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</section>

<?php endwhile; // end the loop?>

<?php get_footer(); ?>