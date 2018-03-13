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
$section_option = insurance_hub_get_option('insurance_hub_homepage_testimonials_option');
if ($section_option != 'hide') {
    $section_bg_image       = insurance_hub_get_option('insurance_hub_testimonials_section_image');
    $testimonial_section_id = insurance_hub_get_option('insurance_hub_testimonial_section_id');
    $section_cat_id         = insurance_hub_get_option('insurance_hub_testimonials_cat_id');
    if ( !empty( $section_cat_id ) )
     {
        $category = get_category($section_cat_id);
        $section_cat_id;
        $counts = $category->category_count;
        if ( $counts > 0 ) 
        {
            ?>
            <section id="<?php echo esc_attr( $testimonial_section_id ); ?>"
                     style="background: #f0f0f0 url('<?php echo esc_url( $section_bg_image ); ?>') no-repeat;">
                <!-- Carousel Inner Starts -->
                <div class="testimonial-inner">
                    <!-- Container Starts -->
                    <div class="container">
                        <!-- Row Starts -->
                        <div class='row'>
                            <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                                <ol class="carousel-indicators">
                                    <?php
                                    for ($j = 0; $j < $counts; $j++) {
                                        ?>
                                        <li data-target="#testimonial-carousel" data-slide-to="<?php echo absint($j); ?>"
                                            class=""></li>
                                    <?php } ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php
                                    $i = 0;
                                    if (!empty($section_cat_id)) {
                                        $home_testimonials_section = array('cat' => $section_cat_id, 'posts_per_page' => -1);
                                        $home_testimonials_section_query = new WP_Query($home_testimonials_section);
                                        if ($home_testimonials_section_query->have_posts()) {
                                            while ($home_testimonials_section_query->have_posts()) {
                                                $home_testimonials_section_query->the_post();
                                                if (has_post_thumbnail()) {
                                                    $image_id = get_post_thumbnail_id();
                                                    $image_path = wp_get_attachment_image_src($image_id, 'thumbnail', true);
                                                }
                                                ?>
                                                <div class="item <?php if ( $i == 0 ) {
                                                    echo esc_attr( "active" );
                                                } ?>">
                                                    <div class="col-sm-8 col-md-8 col-sm-offset-2">
                                                        <blockquote>
                                                            <div class="test-area">
                                                                <div class="test-des">
                                                                    <div class="quote"><i class="fa fa-quote-left"></i>
                                                                    </div>
                                                                    <div class="text-content m-t-20">
                                                                        <?php the_content(); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="author-info">
                                                                    <div class="images-box">
                                                                        <?php if (!empty( $image_path ) ) { ?>
                                                                            <img class="img-circle"
                                                                                 src="<?php echo esc_url($image_path[0]) ?>"
                                                                                 alt="">
                                                                        <?php } ?>
                                                                    </div>
                                                                    <small>
                                                                        <span class="name"> - <?php the_title(); ?></span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <?php
                                                $i++;
                                            }
                                        }
                                        wp_reset_postdata();
                                    }
                                    ?>
                                </div>
                                <?php if ($counts > 1) { ?>
                                <?php } ?>
                            </div>
                        </div><!-- Row Ends -->
                    </div><!-- Container Ends -->
                </div><!-- Testimonial Ends -->
            </section>
        <?php }
    }
} ?>