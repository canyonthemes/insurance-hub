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
$section_option = insurance_hub_get_option( 'insurance_hub_homepage_satisfied_clients_option' );
if ($section_option != 'hide') {
    $section_title       = insurance_hub_get_option( 'insurance_hub_satisfied_clients_section_title' );
    $section_description = insurance_hub_get_option('insurance_hub_satisfied_clients_section_description' );
    $section_bg_image    = insurance_hub_get_option( 'insurance_hub_satisfied_clients_bg_image' );
    $section_cat_id      = insurance_hub_get_option( 'insurance_hub_satisfied_clients_section_cat_id' );

    if ( !empty( $section_cat_id ) ) {

        $category = get_category( $section_cat_id );
        $count    = $category->category_count;
        if ( $count > 0 ) {
            ?>
            <section class="clients-section section-padding"
                     style="background: #f1f1f1 url('<?php echo esc_url( $section_bg_image ) ?>') no-repeat right;">
                <div class="container">
                    <header class="page-header section-header text-center">
                        <h1><?php echo esc_html( $section_title ) ?></h1>
                        <div class="separeter-line">
                            <div class="line-one"></div>
                        </div>
                        <span><?php echo esc_html( $section_description ) ?></span>
                    </header>
                    <div class="row client-list">

                        <div class=" col-sm-12 col-md-12">
                            <ul id="logo" class="owl-carousel owl-theme">
                                <li class="item">
                                    <?php
                                    $i = 0;

                                    if ( !empty( $section_cat_id ) ) 
                                    {
                                    $home_clients_section = array( 'cat' => $section_cat_id, 'posts_per_page' => 8 );
                                    $home_clients_section_query = new WP_Query( $home_clients_section );
                                    if ( $home_clients_section_query->have_posts() ) {
                                    while ( $home_clients_section_query->have_posts() ) {
                                    $home_clients_section_query->the_post();

                                    if ( $i % 1 == 0 )
                                    { ?>
                                </li>
                                <li>

                                    <?php }
                                    if ( has_post_thumbnail() ) {
                                        $image_id  = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src( $image_id, 'full', true );
                                        $image_path = $image_url[0];
                                        ?>
                                        <figure>
                                            <img src="<?php echo esc_url($image_path); ?>" class="img-responsive" alt="">
                                        </figure>
                                        <?php
                                    }
                                    $i++;
                                    }
                                    }
                                    wp_reset_postdata();
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    }
} ?>