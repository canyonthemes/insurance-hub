<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insurance Hub
 */
// retrieving Customizer Value
$section_option = insurance_hub_get_option( 'insurance_hub_homepage_blog_option' );
if ( $section_option != 'hide' ) {
    $section_title     = insurance_hub_get_option( 'insurance_hub_blog_section_title' );
    $section_sub_title = insurance_hub_get_option( 'insurance_hub_blog_section_sub_title' );
    $section_cat_id    = insurance_hub_get_option( 'insurance_hub_blog_categories_id' );
    $blog_section_id   = insurance_hub_get_option( 'insurance_hub_blog_section_id' );

    if ( $section_cat_id >= 0 ) {
        $category = get_category( $section_cat_id );
       ?>
        <section id="<?php echo esc_attr( $blog_section_id ); ?>" class="section-padding">
            <div class="container">
                <header class="page-header section-header text-center section-header-blog">
                    <h1><?php echo esc_html( $section_title ) ?></h1>
                    <div class="separeter-line">
                        <div class="line-one"></div>
                    </div>
                    <span><?php echo esc_html( $section_sub_title ) ?></span>
                </header>

                <div class="row m-t-30">
                    <?php
                    $section_cat_id = absint( insurance_hub_get_option('insurance_hub_blog_categories_id' ) );
                    $sticky = get_option( 'sticky_posts' );
                    if ( $section_cat_id != 0 ) {
                        
                        $home_blog_section = array('cat' => $section_cat_id, 'posts_per_page' => 3, 'ignore_sticky_posts' => true, 'post__not_in' => $sticky, 'order' => 'DESC');
                    } else {
                        $home_blog_section = array(
                            'ignore_sticky_posts' => true,
                            'post__not_in'        => $sticky,
                            'post_type'           => 'post',
                            'posts_per_page'      => 3,
                            'order'               => 'DESC'
                        );
                    }
                    $home_blog_section_query = new WP_Query( $home_blog_section );
                    if ( $home_blog_section_query->have_posts() ) {
                        while ( $home_blog_section_query->have_posts() ) {
                            $home_blog_section_query->the_post();
                            ?>
                            <div class="col-md-4 col-lg-4">
                                <div class="section-blog-box">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        $image_id  = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src( $image_id, 'full', true );
                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url( $image_url[0] ) ?>" class="img-responsive" alt="<?php the_title_attribute(); ?>">
                                        </a>
                                    <?php } ?>
                                    <div class="blog-content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="entry-meta">
                                            <span class="poston">
                                                <i class="fa fa-clock-o"></i> 
                                                <?php echo esc_html( get_the_date('F,d,Y') ); ?>
                                            </span>
                                            <span class="author">
                                                <a href="<?php echo esc_url( get_author_posts_url(get_the_author_meta('ID') ) ) ?>">
                                                    <i cass="fa fa-user"></i>
                                                     <?php echo esc_html( get_the_author_meta('display_name') ) ?>
                                                </a>
                                            </span>
                                        </div>
                                        <p>
                                            <?php echo esc_html( wp_trim_words( get_the_content(), 7) ); ?>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    } ?>
                </div>
            </div>
        </section>

    <?php }
} ?>