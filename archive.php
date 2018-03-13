<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insurance Hub
 */
get_header();

$breadcrump_option = insurance_hub_get_option( 'insurance_hub_breadcrump_option' );

?>
    <div class="header-space"></div>
    <section id="inner-title" class="inner-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6"> 

                    <?php the_archive_title('<h2 class="page-title">', '</h2>') ?>
                    
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="breadcrumbs">
                        <?php
                        if ( 'disable' != $breadcrump_option ) {
                      
                            breadcrumb_trail();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="main">
        <section id="single-section" class="blog single-section">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 item wow fadeInLeft">
                            <div class="item">
                                <?php
                                if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();

                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part('template-parts/content', get_post_format());

                                    endwhile;
                                    the_posts_navigation();
                                else :

                                    get_template_part('template-parts/content', 'none');

                                endif; ?>
                            </div>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>    
    </div>
<?php
get_footer();
