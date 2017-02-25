<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Lato:700,900|Roboto:700|Open+Sans|Playfair+Display" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper clearfix topnav">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <div class="logo-box">
        <img src="<?php bloginfo('template_url'); ?>/images/smallFT.png" alt="logo" aria-label='Fine Tune Pilates Home'>
      </div>
    </a>

    <div class="header">

      <section class="nav">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </section>

    </div>

  </div>
</header>
