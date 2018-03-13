<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Insurance Hub
 */

get_header();
$breadcrump_option = insurance_hub_get_option('insurance_hub_breadcrump_option');
?>
    <div class="header-space"></div>
    <section id="inner-title" class="inner-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6"><h2><?php the_title(); ?></h2></div>
                <div class="col-md-6 col-lg-6">
                    <div class="breadcrumbs">
                        <?php
                        if ('disable' != $breadcrump_option) {
                            breadcrumb_trail();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="main">
        <section id="single-section" class="single-section">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-xs-12 item wow fadeInLeft">
                            <?php

                            while (have_posts()) : the_post();

                                get_template_part('template-parts/content', 'single');

                                the_post_navigation();


                                // If comments are open or we have at least one comment, load up the comment template.

                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- #primary -->
<?php
get_footer();
