<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insurance Hub
 */
$copyright_text   = insurance_hub_get_option( 'insurance_hub_copyright_text_option' );
$hide_social_menu = insurance_hub_get_option( 'insurance_hub_hide_footer_social_icon' );
?>
<!-- Footer Section Start Here -->
<footer id="footer">
    <section class="footer-section">
        <?php
        if ( is_active_sidebar( 'about_us' ) || is_active_sidebar( 'lates_tweets' ) || is_active_sidebar( 'newsletter' ) )
        {
            ?>
            <div class="footer-sidebars">
                <div class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 foot-widget text-left wow fadeInUp">
                                <?php dynamic_sidebar( 'about_us' ); ?>
                            </div>
                            <?php if ( is_active_sidebar( 'lates_tweets' ) || is_active_sidebar( 'newsletter' ) ) { ?>
                                <div class="col-md-4 foot-widget text-left wow fadeInUp">
                                    <div class="m-l-20">
                                        <div class="twitter">
                                            <?php dynamic_sidebar( 'lates_tweets' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 foot-widget wow fadeInUp">
                                    <div class="newsletter-widget">
                                        <?php dynamic_sidebar( 'newsletter' ); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
  <?php } ?>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="copyright "><?php echo wp_kses_post( $copyright_text ); ?> </p>
                    </div>
                    <?php
                    if ( has_nav_menu( 'social-menu' ) && $hide_social_menu == 1 )
                     { ?>
                        <div class="social-links col-md-4  col-xs-12  pull-right">
                            <?php wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'social-icons hidden-xs pull-right')); ?>

                        </div>
               <?php } ?>

                </div>
            </div>
        </div>

    </section>
</footer>
<!-- End footer -->
<a class="scroll-top fa fa-angle-up" href="javascript:void(0)"></a>
<?php wp_footer(); ?>
</body>
</html>
