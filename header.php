<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hawkcell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NVJCR7G2');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500&display=swap" rel="stylesheet">

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/temp.css" rel="stylesheet">

	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon.svg" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="HawkCell" />
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/site.webmanifest" />
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


	

	<?php wp_head(); ?>
</head>


<?php if ( is_page( 9 ) ) { ?>
	<body <?php body_class('font-body text-h-black veterinarians'); ?> style="opacity:0">
<?php } elseif ( is_page( 11 ) ) { ?>
	<body <?php body_class('font-body text-h-black researchers'); ?> style="opacity:0">
<?php } else { ?>
	<body <?php body_class('font-body text-h-black'); ?> style="opacity:0">
<?php } ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSDXV63"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<div class="hidden lg:block custom-cursor"></div>

<!-- div class="md:h-[290px] h-64 object-top bottom-[110px] lg:bottom-20 lg:pr-[330px]  py-12 lg:py-24 h-[50vh] xl:h-56 rounded-[10px] font-body text-[15px] hover:text-h-orange mb-4 mb-8 hidden lg:flex lg:flex lg:space-x-2 space-y-8 text-white visited:text-white hover:text-h-orange transition-all  2xl:text-[15px]"></div-->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hawkcell' ); ?></a>

	<header id="masthead" class="site-header fixed w-full top-0 z-20 px-6 lg:px-20 transition-all">
		<div class="opacity-70 bg-black absolute w-full h-full top-0 left-0 z-10 hidden" data-micromodal-close></div>
		<div class="absolute left-6 lg:left-20 right-6 lg:right-20 bottom-0">
			<div class="h-[1px] borderline bg-white relative w-[0px]"></div>
		</div>
		<div class="anim flex justify-between items-center py-6 transition-all">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( is_page( 9 ) ) { ?>
					<img class="vet w-14 h-14 lg:w-auto lg:h-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-vet.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
				<?php } elseif ( is_page( 11 ) ) { ?>
					<img class="research w-14 h-14 lg:w-auto lg:h-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-research.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
				<?php } else { ?>
					<img class="light w-14 h-14 lg:w-auto lg:h-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
					<img class="dark w-14 h-14 lg:w-auto lg:h-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-dark.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
				<?php } ?>
			</a>
			<nav id="site-navigation" class="main-navigation text-white">
				<button class="menu-toggle block lg:hidden" aria-controls="primary-menu" aria-expanded="false">
					<svg class="w-8	h-8" xmlns="http://www.w3.org/2000/svg" width="86.928" height="56" viewBox="0 0 86.928 56">
					  <path id="menu" d="M0,93.8a2.716,2.716,0,0,1,2.716-2.716H84.211a2.716,2.716,0,0,1,0,5.433H2.716A2.716,2.716,0,0,1,0,93.8Zm84.211,22.567H2.716a2.716,2.716,0,0,0,0,5.433H84.211a2.716,2.716,0,0,0,0-5.433ZM43.464,141.648H2.716a2.716,2.716,0,0,0,0,5.433H43.464a2.716,2.716,0,0,0,0-5.433Z" transform="translate(0 -91.081)" />
					</svg>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'hidden lg:flex m-0 p-0 list-none font-title text-[14px] 2xl:text-[15px] uppercase tracking-widest',
						'container' => false,
						'walker' => new Nav_Walker_Nav_Menu()
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="items-center hidden lg:flex">
				<?php $activatelang = get_field('activate_language_switcher','option');
				if( $activatelang && in_array('activate', $activatelang) ) { ?>
					<div class="items-center hidden lg:flex">
						<?php do_action('wpml_add_language_selector'); ?>
					</div>
				<?php } ?>

				<?php
				$current_page_id = get_queried_object_id();
				$current_page_slug = $current_page_id ? get_post_field('post_name', $current_page_id) : '';
				$current_page_title = $current_page_id ? get_the_title($current_page_id) : '';

				$is_home_test_page = !is_front_page() && is_page() && ( $current_page_slug === 'home-test' || $current_page_title === 'Home Test' );

				$header_button_url = $is_home_test_page ? 'https://hawkcell.com/contact/' : get_field( 'header_button_url', 'options' );
				$header_button_text = $is_home_test_page ? 'Contact Us' : get_field( 'header_button_text', 'options' );
				?>

				<a href="<?php echo esc_url( $header_button_url ); ?>" class="hidden xl:block btn text-white border-h-orange hover:bg-white hover:text-h-black hover:border-white"><?php echo esc_html( $header_button_text ); ?></a>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
