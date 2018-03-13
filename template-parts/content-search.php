<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insurance Hub
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?> ">    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_excerpt();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'insurance-hub' ),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__('Edit %s', 'insurance-hub'),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->