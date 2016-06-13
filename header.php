<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- FAVICON -->
  <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="images/favicon/android-chrome-192x192.png" sizes="192x192">
  <meta name="msapplication-square70x70logo" content="/smalltile.png" />
  <meta name="msapplication-square150x150logo" content="/mediumtile.png" />
  <meta name="msapplication-wide310x150logo" content="/widetile.png" />
  <meta name="msapplication-square310x310logo" content="/largetile.png" />

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

