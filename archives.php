<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */
/*
Template Name: Archives
*/
?>
<?php
	get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="blogPost"><h3 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3><div class="pageBody archivesPage">
<br/>
<?php get_search_form(); ?>

<h4>Archives by Month:</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h4>Archives by Category:</h4>
	<ul>
		 <?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
	</ul>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, this page could not be found.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>