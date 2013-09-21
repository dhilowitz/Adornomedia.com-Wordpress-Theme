<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="blogPost">
	<h3 class="postTitle">
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
	</h3>
	<div class="subTitle">
		Posted on <?php the_date('','',''); ?> by <?php the_author_link() ?>
	</div>
	<div class="postBody">
		<?php the_content(__('(more...)')); ?>
	</div>
	<div class="metaData">
		<?php _e("Posted in"); ?> <?php the_category(',') ?>. 
		<?php the_tags(__('Tags: '), ', ', '.');?> 
		There <?php comments_number( "are", "is", "are");?> 
		<?php comments_popup_link(__('<b>no comments</b>'), __('<b>1 comment</b>'), __('<b>% comments</b>')); ?> 
		for this post. 
		<?php edit_post_link(__('Edit This')); ?>
	</div><?php comments_template(); ?>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>

<?php get_footer(); ?>
