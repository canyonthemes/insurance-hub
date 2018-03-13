<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insurance Hub
 */
$hide_show_feature_image = insurance_hub_get_option('insurance_hub_show_feature_image_single_option');
$hide_show_author_info   = insurance_hub_get_option('insurance_hub_show_author_info_option');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php insurance_hub_posted_on(); ?>
            </div><!-- .entry-meta -->

            <?php
        endif; ?>
    </header><!-- .entry-header -->
    <!--post thumbnal options-->
    <?php
    if ($hide_show_feature_image == "show") {
        ?>
        <div class="post-thumb">
            <?php the_post_thumbnail('large'); ?>
        </div><!-- .post-thumb-->
    <?php } ?>


    <div class="entry-content">
        <?php
        the_content(sprintf(
        /* translators: %s: Name of current post. */
            wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'insurance-hub'), array('span' => array('class' => array()))),
            the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'insurance-hub'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php insurance_hub_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    <?php
    /*author bio*/

    if ('show' == $hide_show_author_info) {
        get_template_part('template-parts/content', 'author');
    }
    ?>
</article><!-- #post-## -->
