<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
	<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php else : ?>

		<div class="post-container">
			<!-- .thumbnail -->
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<?php the_post_thumbnail(array(400, 300), array('class'=>'thumbnail')); ?>
			<?php endif; ?>
			<!-- // .thumbnail -->

			<a href="<?php the_permalink(); ?>">
				<div class="post-details">
					<div class="content">
						<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
					</div>
					<div class="date">
						<strong><?php the_time('F jS, Y') ?></strong>
					</div>
				</div>
			</a>
		</div><!-- .post-container -->

		<div class="post-meta">
			<div class="col-md-9">
				<strong><?php the_author(); ?></strong>
			</div>
			<div align="right" class="col-md-3">
				<?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span>', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
				<?php comments_popup_link( '<span class="leave-reply">' . __( '<span class="glyphicon glyphicon-comment"></span>', 'twentythirteen' ) . '</span>', __( '<span class="glyphicon glyphicon-comment"></span>', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div>
		</div>
	<?php endif; // is_single() ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php // the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php //comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

