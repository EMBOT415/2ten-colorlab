<?php
/* Template Name: Home Page */ 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package colorplay_s
 */





get_header();?> 
	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">

<div class="home-content">
            <div class="content">
                <div><p class="knockout">ColorPlayLabs is a design laboratory</p></div>
                <div><p class="knockout">based in New York City focusing on conceptual fashion and image design.</p></div>
                <div><p class="knockout">We design playfulness with pedigree.</p></div>
            </div> 
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
