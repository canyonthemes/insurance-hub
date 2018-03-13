<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Canyon Themes
 * @subpackage Insurance Hub
 */
$breadcrump_option = insurance_hub_get_option('insurance_hub_breadcrump_option');
get_header();
?>
   <div class="header-space"></div>
	<section id="inner-title" class="inner-title">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6"><h2><?php the_title(); ?></h2></div>
				<div class="col-md-6 col-lg-6">
					<div class="breadcrumbs">
						<?php 
				         if( 'disable' != $breadcrump_option )
				         {                  
				         
				         	breadcrumb_trail();
				         }				              
				        ?>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="primary" class="content-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-xs-12 item wow fadeInLeft">
					<main id="main" class="site-main" role="main">
						 <?php if ( have_posts() ) :
                              woocommerce_content();
                              endif;
                        ?>
					</main><!-- #main -->
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section><!-- #primary -->
<?php get_footer();