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
$section_option = insurance_hub_get_option( 'insurance_hub_homepage_hero_option' );
if ($section_option != 'hide') {
    $quote_title        = insurance_hub_get_option( 'insurance_hub_hero_section_title' );
    $quote_a_quote_text = insurance_hub_get_option( 'insurance_hub_hero_purchase_txt' );
    $quote_a_quote_link = insurance_hub_get_option( 'insurance_hub_hero_purchase_link' );
    ?>

    <div class="purchase-now">
        <div class="container">
            <div class="row">
                <div class="items col-xs-12 col-sm-12 col-md-9 text-left">
                    <strong> <?php echo esc_html( $quote_title ) ?></strong>
                </div>
                <?php
                if ( !empty( $quote_a_quote_text ) ) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 text-left">
                        <a href="<?php echo esc_url( $quote_a_quote_link ) ?>" class="btn btn-theme">
                            <span class="icon icon-Goto "> </span>
                            <?php echo esc_html( $quote_a_quote_text ) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } ?>