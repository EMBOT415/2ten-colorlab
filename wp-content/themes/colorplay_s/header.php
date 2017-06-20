<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colorplay_s
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>Colorplay Labs - New York City</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style type="text/css">.tk-droid-sans-mono{font-family:"droid-sans-mono",monospace;}.tk-orator-std{font-family:"orator-std",monospace;}</style><style type="text/css">@font-face{font-family:tk-droid-sans-mono-n4;src:url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:tk-orator-std-n4;src:url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:tk-orator-std-i4;src:url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}</style><script>try{Typekit.load({ async: true });}catch(e){}</script><style type="text/css">@font-face{font-family:droid-sans-mono;src:url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/4dc481/000000000000000000012419/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:orator-std;src:url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/7594a9/000000000000000000013036/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:orator-std;src:url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/6d2e24/000000000000000000013037/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">


	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<div class="logo"><a href="/"><img src="http://localhost:8888/colorplay-lab/wp-content/uploads/2017/06/colorplay-logo-black.png"></a></div>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'colorplay_s' ); ?></button>


		</nav><!-- #site-navigation -->
            <div class="mobile-menu">
                <a href="#" class="menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <nav class="emilymobile">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
            </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<script>
$(document).ready(function () {
 $(document).on('click', '.menu-trigger', function() {
console.log('clicked');
    $('.emilymobile').toggleClass('drawer-open');
    });
});
</script>