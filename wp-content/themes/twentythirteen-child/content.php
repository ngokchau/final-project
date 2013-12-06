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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- SINGLE -->
	<?php if ( is_single() ) : ?>
		<!-- NEWER -->
		<div class="col-md-2 hidden-sm hidden-xs">
			<?php
				$nextPost = get_adjacent_post(false, '', false);
				$nextPostId = $nextPost->ID;
				$nextPostPermalink = get_permalink($nextPostId);
				$previousPost = get_adjacent_post(true, '', true);
				$previousPostId = $previousPost->ID;
				$previousPostPermalink = get_permalink($previousPostId);

				if($nextPost) {
					echo "<a href=\"$nextPostPermalink\">";
					echo get_the_post_thumbnail($nextPostId, array(150, 150), array('class'=>'thumbnail nav-thumbnail'));
					echo "</a>";
				}
			?>
		</div>
		<!-- NEWER -->

		<!-- CURRENT -->
		<div class="col-md-8">
			<?php the_post_thumbnail(array(800, 600), array('class'=>'thumbnail img-thumbnail')); ?>

			<br />
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<h5 class="entry-meta">by <?php the_author(); ?> on <?php the_time('F jS, Y') ?> <?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span>', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?></h5>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
			<ul class="pager visible-sm visible-xs">
				<li class="previous" style="float: left;"><a href="<?php echo $nextPostPermalink; ?>">&larr; Older</a></li>
				<li class="next" style="float: right;"><a href="<?php echo $previousPostPermalink; ?>">Newer &rarr;</a></li>
			</ul>

		</div>
		<!-- CURRENT -->

		<!-- OLDER -->
		<div class="col-md-2 hidden-sm hidden-xs">
			<?php 
				if($previousPost) {
					echo "<a href=\"$previousPostPermalink\">";
					echo get_the_post_thumbnail($previousPostId, array(150, 150), array('class'=>'thumbnail nav-thumbnail'));
					echo "</a>";
				}
			?>
		</div>
		<!-- OLDER -->
	<!-- // SINGLE -->

	<!-- GALLERY -->
	<?php else : ?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="post-container">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<a href="<?php the_permalink(); ?>">
						<!-- .thumbnail -->
							<?php the_post_thumbnail(array(400, 300), array('class'=>'thumbnail')); ?>
						<!-- // .thumbnail -->

						<div class="post-details">
							<div class="content">
								<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><strong><?php the_title(); ?></strong></a></h4>
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
							</div>
							<div class="date">
								<strong><?php the_time('F jS, Y') ?></strong>
							</div>
						</div><!-- // .post-details -->
					</a>
				<?php endif; ?>
			</div><!-- // .post-container -->

			<div class="post-meta">
				<div class="col-xs-8">
					<strong><?php the_author(); ?></strong>
				</div>
				<div align="right" class="col-xs-4">
					<?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span>', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					<?php comments_popup_link( '<span class="leave-reply">' . __( '<span class="glyphicon glyphicon-comment"></span>', 'twentythirteen' ) . '</span>', __( '<span class="glyphicon glyphicon-comment"></span>', 'twentythirteen' ), __( '<span class="glyphicon glyphicon-comment"></span>', 'twentythirteen' ) ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- // GALLERY -->




	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php // the_excerpt(); ?>
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

