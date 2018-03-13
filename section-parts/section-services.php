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
$section_option = insurance_hub_get_option( 'insurance_hub_homepage_service_option' );
if ( $section_option != 'hide' ) {
    $section_title      = insurance_hub_get_option( 'insurance_hub_services_section_title' );
    $section_sub_title  = insurance_hub_get_option( 'insurance_hub_services_section_sub_title' );
    $no_of_words        = insurance_hub_get_option( 'insurance_hub_services_character_limit' );
    $show_link          = insurance_hub_get_option( 'insurance_hub_services_show_link_option' );
    $service_section_id = insurance_hub_get_option( 'insurance_hub_services_section_id' );
    ?>

    <section id="<?php echo esc_attr( $service_section_id ); ?>" class="section-padding services-section">
        <div class="container">
            <div class="row">
                <div class="">
                    <header class="page-header section-header text-center">
                        <h1><?php echo esc_html( $section_title ) ?></h1>
                        <div class="separeter-line">
                            <div class="line-one"></div>
                        </div>
                        <span><?php echo esc_html( $section_sub_title ) ?></span>
                    </header>
                    <?php
                    $insurance_hub_default_service_icon = array('fa-desktop', 'fa-print', 'fa-paint-brush', 'fa-mobile', 'fa-flash', 'fa-support');
                    $insurance_hub_separator_label      = array('First', 'Second', 'Third', 'Forth', 'Fifth', 'Sixth');
                    foreach ( $insurance_hub_separator_label as $icon_key => $icon_value) {

                        $service_icon = insurance_hub_get_option( 'insurance_hub_service_icon_' . $icon_key, $insurance_hub_default_service_icon[$icon_key]);

                        $service_page_id_value = insurance_hub_get_option( 'insurance_hub_service_page_id_' . $icon_key );

                        if ( !empty( $service_page_id_value ) ) {
                            
                            $service_page_query = new WP_Query(array('page_id' => $service_page_id_value));
                            if ( $service_page_query->have_posts() ) {
                                while ( $service_page_query->have_posts() ) {
                                    $service_page_query->the_post();
                                    ?>
                                    <div class="col-sm-4 col-md-4 item">
                                        <div class="services-box">
                                            <?php if ( !empty( $service_icon ) )
                                             { ?>
                                                <i class=" fa <?php echo esc_attr( $service_icon ); ?>"> </i>
                                            <?php } ?>
                                            <div class="services-content">
                                                <?php
                                                if ( $show_link == 1 ) { ?>
                                                    <h5>
                                                     <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                            
                                                     </a>
                                                    </h5>
                                                    <div class="separeter-line">
                                                        <div class="line-one"></div>
                                                    </div>
                                                <?php } else { ?>
                                                    <h6><?php the_title(); ?></h6>

                                                <?php }
                                                ?>
                                                <p><?php echo esc_html( wp_trim_words(get_the_content(), $no_of_words ) ); ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
<?php } ?>