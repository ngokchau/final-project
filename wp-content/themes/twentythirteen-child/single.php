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

			<?php get_template_part( 'content', get_post_format() ); ?>

			<div class="col-md-8 col-md-offset-2">
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>

	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>