<?php

/*
	Template Name: Home Page
*/

get_header();  ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section class="header" style="background-image: url(<?php the_field('header_image') ;  ?>);">
	<div class="wrapper">
		<div class="header__content">
			<div class="logo">
				<img src="<?php the_field('logo'); ?>" alt="">
			</div>
			<h2><?php the_field('title'); ?></h2>
			<h3><?php the_field('intro') ?></h3>
		</div>
	</div>
</section>

<section class="intro-boxes">
	<div class="wrapper">
		<ul class="three-intro-boxes clearfix">
		<?php if( have_rows('three_intro_boxes')): ?>
			<?php while( have_rows('three_intro_boxes')): the_row(); ?>

				<li>
					<a href="#">
						<img src="<?php the_sub_field('image_box') ?>" alt="">
						<div class="overlay">
							<h4><?php the_sub_field('label') ?></h4>
						</div>
					</a>
				</li>

			<?php endwhile; ?>
		<?php endif; ?>
		</ul>
	</div>
</section>

<section class="big-links clearfix">
	<div class="wrapper">
		<div class="link link-one">
			<h4><a href="https://www.instagram.com/finetunepilates/">Follow us on Instagram</a></h4>
			<?php echo wdi_feed(array('id'=>'1')); ?>
		</div>

		<div class="link link-two">
			<h4>Our Shop</h4>
			<div class="colour-box">
				<h5>coming soon</h5>
			</div>
		</div>
	</div>
</section>


<!-- <footer>

	<ul class="socialmedianav">
	<?php if( have_rows('social_media_links')): ?>
		<?php while( have_rows('social_media_links')): the_row(); ?>

			<li>
				<a href="http://<?php the_sub_field('link') ?>">
					<i class="fa <?php the_sub_field('icon'); ?>"></i>
				</a>
			</li>

		<?php endwhile; ?>
	<?php endif; ?>
	</ul>

</footer> -->


<?php endwhile; // end the loop?>



<?php get_footer(); ?>
