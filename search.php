<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Insurance Hub
 */

get_header(); ?>
    <div class="header-space"></div>
    <section id="inner-title" class="inner-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h2><?php printf(esc_html__( 'Search Results for: %s', 'insurance-hub' ), '<span>' . get_search_query() . '</span>'); ?></h2>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="breadcrumbs">
                        <?php
                        if ( 'disable' != $breadcrump_option ) 
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
                <div class="col-sm-8 sol-md-8 search-section">
                    <main id="main" class="site-main item" role="main">
                        <?php if ( have_posts() ) : ?>
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );
                            endwhile;
                            the_posts_navigation();
                        else :
                            get_template_part( 'template-parts/content', 'none' );
                        endif; ?>

                    </main><!-- #main -->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section><!-- #primary -->
<?php
get_footer();
