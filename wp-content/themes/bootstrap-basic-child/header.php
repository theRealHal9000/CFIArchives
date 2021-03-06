<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script src="https://use.typekit.net/urx3vcd.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<header role="banner">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<?php do_action('before'); ?>
					<div class="row main-navigation">
						<div class="col-xl-12">
							<div class="navbar-header">
									<h1 class="navigation-bar"><a class="black" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img class="header-logo" src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2016/02/cfi-archives-header.png" /></a></h1>
							</div>
							<br />
							<div class="collapse navbar-collapse navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							</div><!--.navbar-collapse-->
						</div>
					</div><!--.main-navigation-->
					<?php do_action('after'); ?>
				</div>
			</nav>
		</header>
<?php if ( is_post_type_archive() || is_single()) : ?>
	<div class="publication-header">
		<div class="container">
			<div class="col-xl-12">
				<h3><?php $post_type = get_post_type_object( get_post_type($post) );
echo $post_type->description ; ?></h3>

			</div>
		</div>
	</div>
		<div class="container page-container">
			<?php do_action('before'); ?> 	
			<div id="content" class="row site-content">
<?php else : ?>
	<div class="container page-container">
			<?php do_action('before'); ?> 	
			<div id="content" class="row site-content">

<?php endif; ?> 