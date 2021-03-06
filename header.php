<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="wp-content/themes/hy_starter_theme/favicon1.png">

  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1></h1>
    
    <nav class="fullNav">
      <ul>
        <li><a href="<?php echo home_url(); ?>">home</a></li>
        <li><a href="<?php echo home_url(); ?>/#about">about</a></li>
        <li><a href="<?php echo home_url(); ?>/#portfolio">portfolio</a></li>
        <li><a href="<?php echo home_url(); ?>/#contact">contact</a></li>
      </ul>
    </nav>

    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> <!-- /.container -->

    <nav class="responsiveNav">
      <ul>
        <li><a href="<?php echo home_url(); ?>">home</a></li>
        <li><a href="<?php echo home_url(); ?>/#about">about</a></li>
        <li><a href="<?php echo home_url(); ?>/#portfolio">portfolio</a></li>
        <li><a href="<?php echo home_url(); ?>/#contact">contact</a></li>
      </ul>
    </nav>
</header><!--/.header-->

