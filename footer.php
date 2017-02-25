<footer>
  <div class="wrapper">

		<?php
        $footerQuery = new WP_Query(
    array(
            'posts_per_page' => -1,
            'post_type' => 'footer',
            'order' => 'ASC'
            )
    ); ?>

    <?php if ( $footerQuery->have_posts() ) : ?>

        <?php while ($footerQuery->have_posts()) : $footerQuery->the_post(); ?>

						<div class="social-links">
							<ul class="socialmedianav clearfix">
							<?php if( have_rows('social_links')): ?>
								<?php while( have_rows('social_links')): the_row(); ?>

									<li>
										<a href="http://<?php the_sub_field('media_link') ?>">
											<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
										</a>
									</li>

								<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>

						<div class="contact clearfix">

							<div class="contact-section">
								
								<ul class="contact phone">
								<?php if( have_rows('phone')): ?>
									<?php while( have_rows('phone')): the_row(); ?>

										<li>
											<a href="tel:<?php the_sub_field('contact_link') ?>">
												<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
												<?php the_sub_field('contact_link') ?>
											</a>
										</li>

									<?php endwhile; ?>
								<?php endif; ?>
								</ul>

								<ul class="contact email">
								<?php if( have_rows('email')): ?>
									<?php while( have_rows('email')): the_row(); ?>

										<li>
											<a href="mailto:<?php the_sub_field('contact_link') ?>">
												<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
												<?php the_sub_field('contact_link') ?>
											</a>
										</li>

									<?php endwhile; ?>
								<?php endif; ?>
								</ul>

							</div>
						
							<ul class="address">
							<?php if( have_rows('address')): ?>
								<?php while( have_rows('address')): the_row(); ?>

									<li>
											<i class="fa <?php the_sub_field('icon_class'); ?>"></i>
											<?php the_sub_field('address') ?>
									</li>

								<?php endwhile; ?>
							<?php endif; ?>
							</ul>

						</div>
            
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else:  ?>
        [stuff that happens if there aren't any posts]
    <?php endif; ?>

    <p class="copywrite">&copy;Fine Tune Pilates <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>