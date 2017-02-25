<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="intro-heading">
	<div class="wrapper">
		<h1><?php the_field('header_one'); ?></h1>
		<h2><?php the_field('header_two'); ?></h2>
	</div>
</section>

<section class="about-cols">
	<div class="wrapper clearfix">

		<div class="col">

			<?php if( have_rows('col_one')): ?>
				<?php while( have_rows('col_one')): the_row(); ?>

					<h4><?php the_sub_field('heading') ?></h4>
					<p><?php the_sub_field('col_content') ?></p>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<div class="col">

			<?php if( have_rows('col_two')): ?>
				<?php while( have_rows('col_two')): the_row(); ?>

					<h4><?php the_sub_field('heading') ?></h4>
					<p><?php the_sub_field('col_content') ?></p>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<div class="col contact-col">
			<?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
		</div>

		<div class="contact-links">
			<ul class="contact phone">
			<?php if( have_rows('phone')): ?>
				<?php while( have_rows('phone')): the_row(); ?>

					<li>
						<h5>
							<a href="tel:<?php the_sub_field('contact_link') ?>">
								<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
								<?php the_sub_field('contact_link') ?>
							</a>
						</h5>
					</li>

				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
			<ul class="address">
			<?php if( have_rows('address')): ?>
				<?php while( have_rows('address')): the_row(); ?>

					<li>
						<h5>
							<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
							<?php the_sub_field('contact_link') ?>
						</h5>
					</li>

				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>

	</div>

</section>

<section class="instructors">
	<?php $instructorCount = 0; ?>
	<?php if( have_rows('instructors')): ?>
			<?php while( have_rows('instructors')): the_row(); ?>

				<?php if ($instructorCount % 2 === 0) : ?>
					<div class="instructorsRow clearfix">
						<div class="instructorbio">
							<div class="wrapper">
								<h4><?php the_sub_field('name') ?></h4>
								<p><?php the_sub_field('bio') ?></p>
							</div>
						</div>
						<div class="instructorphoto">
							<img src="<?php the_sub_field('photo') ?>" alt="">
						</div>
					</div>
				<?php else : ?>
					<div class="instructorsRow clearfix">
						<div class="instructorphoto">
							<img src="<?php the_sub_field('photo') ?>" alt="">
						</div>
						<div class="instructorbio">
							<div class="wrapper">
								<h4><?php the_sub_field('name') ?></h4>
								<p><?php the_sub_field('bio') ?></p>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php $instructorCount++; ?>
			<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="reviews">
	<div class="wrapper">

		<h4><?php the_field('reviews_heading'); ?></h4>

		<ul class="reviews">
		<?php if( have_rows('reviews')): ?>
			<?php while( have_rows('reviews')): the_row(); ?>

				<li>
						<?php the_sub_field('review_content'); ?>
						<span class="name"><?php the_sub_field('reviewers_name'); ?></span>
				</li>

			<?php endwhile; ?>
		<?php endif; ?>
		</ul>

	</div>
</section>


<?php endwhile; // end the loop?>

<?php get_footer(); ?>
