<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Insurance Hub
*/
?>
<div class="search-block">
    <form action= "<?php echo esc_url( home_url() )?>" class="searchform" id="searchform" method="get" role="search">
        <div>
            <label for="menu-search" class="screen-reader-text"></label>
            <?php
             $insurance_hub_placeholder_option = insurance_hub_get_option( 'insurance_hub_post_search_placeholder_option'); ?>
            <input type="text" placeholder='<?php echo esc_attr( $insurance_hub_placeholder_option) ;?>'  class="menu-search" id="menu-search" name="s" value="<?php echo esc_attr( get_search_query() );?>">
            <button class="searchsubmit fa fa-search" type="submit" id="searchsubmit"></button>
        </div>
    </form>
</div>