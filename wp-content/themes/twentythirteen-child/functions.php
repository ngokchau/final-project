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
?>