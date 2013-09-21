<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="blogPost">
<?php if (get_post_meta($post->ID, 'show_title', true) != "no") {?><h3 id="pageTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3><?}?><div class="pageBody"><?php the_content(__('(more...)')); ?></div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, this page could not be found.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
