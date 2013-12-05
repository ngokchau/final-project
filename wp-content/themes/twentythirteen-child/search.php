<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
				<?php if ( have_posts() ) : ?>

					<header class="col-md-12">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1>
					</header>

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
							<?php get_template_part( 'content', get_post_format() ); ?>
						<!-- </div> -->
					<?php endwhile; ?>

					<?php twentythirteen_paging_nav(); ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>