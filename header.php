<?php
/*
 #=======================================================
 *
 * header.php
 *
 * The theme header template
 *
 #=======================================================
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon & Apple touch icons -->
    <?php
        $favicon = IMAGES.'/icons/favicon.ico';
        $touchicon = IMAGES.'/icons/apple-touch-icon-precomposed.png';
    ?>

    <link rel="shortcut icon" href="<?php echo $favicon; ?>" >
    <link rel="apple-touch-icon-precomposed" href="<?php echo $touchicon; ?>" sizes="152x152" >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="fh5co-main-nav" role="navigation">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
    <div class="js-fullheight fh5co-table">
        <div class="fh5co-table-cell js-fullheight">
            <ul>                
								<?php
										wp_nav_menu(array(
											'menu_class'		 =>	'',
											'theme_location' => 'main-menu',
											'container'			 =>	false
										));
								 ?>
            </ul>
        </div>
    </div>
</nav>

<div id="fh5co-page">
    <header>
        <div class="container">
            <div class="fh5co-navbar-brand">
                <a class="fh5co-logo" href="<?php echo esc_url( home_url('/') ); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        </div>
    </header>
