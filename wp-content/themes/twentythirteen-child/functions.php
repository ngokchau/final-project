<?php 
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item){
	if(in_array('current-menu-item', $classes)){ //Notice you can change the conditional from is_single() and $item->title
		$classes[] = "active";
	}

	return $classes;
}

add_theme_support('post-thumbnails');

add_filter('get_avatar','change_avatar_css');

function change_avatar_css($class) {
$class = str_replace("class='avatar", "class='circle ", $class);
return $class;
}

function twentythirteen_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="col-md-12" role="navigation">
		<hr>
		<!-- <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1> -->
		<ul class="pager">

			<?php // if ( get_next_posts_link() ) : ?>
			<?php next_posts_link( __( '&larr; Older posts', 'twentythirteen' ) ); ?>
			<?php // endif; ?>

			<?php // if ( get_previous_posts_link() ) : ?>
			<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentythirteen' ) ); ?>
			<?php // endif; ?>

		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
?>