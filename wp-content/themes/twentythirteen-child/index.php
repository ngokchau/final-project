<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen Child 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 hidden-xs">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-audi-r8.jpg" alt="...">
						<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, asperiores, libero, sit, deserunt corporis consectetur molestias debitis totam amet soluta aliquam omnis eveniet dolorem numquam possimus deleniti pariatur porro perspiciatis.
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-audi-xq.jpg" alt="...">
						<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, asperiores, libero, sit, deserunt corporis consectetur molestias debitis totam amet soluta aliquam omnis eveniet dolorem numquam possimus deleniti pariatur porro perspiciatis.
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-porsche.jpg" alt="...">
						<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, asperiores, libero, sit, deserunt corporis consectetur molestias debitis totam amet soluta aliquam omnis eveniet dolorem numquam possimus deleniti pariatur porro perspiciatis.
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>

	<?php if ( have_posts() ) : ?>

		<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		</div>

		<div class="row">
			<?php twentythirteen_paging_nav(); ?>
		</div>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>