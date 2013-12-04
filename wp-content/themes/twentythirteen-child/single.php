<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-2 hidden-sm hidden-xs">
				<?php
					$nextPost = get_adjacent_post(false, '', false);
					$nextPostId = $nextPost->ID;
					$nextPostPermalink = get_permalink($nextPostId);

					echo "<a href=\"$nextPostPermalink\">";
					echo get_the_post_thumbnail($nextPostId, array(150, 150), array('class'=>'thumbnail nav-thumbnail'));
					echo "</a>";
				?>
			</div>
			<div class="col-md-8">
				<?php get_template_part( 'content', get_post_format() ); ?>
			</div>
			<div class="col-md-2 hidden-sm hidden-xs">
				<?php 
					$previousPost = get_adjacent_post(true, '', true);
					$previousPostId = $previousPost->ID;
					$previousPostPermalink = get_permalink($previousPostId);
					
					echo "<a href=\"$previousPostPermalink\">";
					echo get_the_post_thumbnail($previousPostId, array(150, 150), array('class'=>'thumbnail nav-thumbnail'));
					echo "</a>";
				?>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>

	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>