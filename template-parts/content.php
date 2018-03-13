<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insurance Hub
 */
$hide_show_feature_image   = insurance_hub_get_option('insurance_hub_show_feature_image_option');
$description_lenght_option = insurance_hub_get_option('insurance_hub_description_lenght_option');
$readmore_text_option      = insurance_hub_get_option('insurance_hub_readmore_text_blog_archive_option');
$show_comments_option      = insurance_hub_get_option('insurance_hub_blog_show_comments_option');
?>
<article class="news-block  wow fadeInUp" id="post-<?php the_ID(); ?>">
    <div class="news-inner">
        <div class="row">

            <?php if (has_post_thumbnail()) { ?>

                <div class="post-thumbnail col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                    </a>
                </div>
            <?php } ?>

            <div class="news-info <?php if (has_post_thumbnail()) {
                echo "col-sm-6 text-left";
            } else {
                echo "col-sm-12";
            } ?> ">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="date"><?php insurance_hub_post_date(); ?></div>
                <div class="content"><p>
                        <?php
                        echo wp_trim_words( get_the_content(), $description_lenght_option );
                        ?>
                    </p></div>

                <div class="name">
                    <span>
                        <?php insurance_hub_blog_list() ?>
                    </span>
                </div>
                <?php if ( $show_comments_option == 1) { ?>
                    <div class="comments"><i class="fa fa fa-comments" aria-hidden="true"></i><a
                                href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comments', '% comments'); ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</article>
