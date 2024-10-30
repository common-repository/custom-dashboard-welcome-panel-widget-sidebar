<?php
/*
Plugin Name: Custom Dashboard Welcome Panel Widget Sidebar
Plugin URI: http://wordpress.org/plugins/custom-dashboard-welcome-panel-widget-sidebar
Description: This plugin registers a new sidebar widget to be used on the ADMIN SIDE ONLY. When active it replaces the WP Welcome Panel Dashboard Widget.
Version: 0.6
Author: Bryan Willis
Author Email: businesscandid@gmail.com
License:
*/

// CREATES THE NEW SIDEBAR FOR WELCOME PANEL
add_action( 'widgets_init', 'brwacefg_register_welcome_as_sidebar_widget_sidebars');
function brwacefg_register_welcome_as_sidebar_widget_sidebars(){
    register_sidebar(array(
        'name' => 'Admin Only Dashboard Welcome',
		'id' => 'brwacefgwpwelcomedash',
        'description' => 'Widgets in this area will replace the admin dashboard welcome panel',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '',
        'after_widget' => ''
    ));
}

// FUNCTION THAT RENDERS THE NEW WELCOME PANEL
function brwacefg_welcome_as_sidebar_widget() {
ob_start(); ?>
	<div class="welcome-panel-content">
       <?php dynamic_sidebar( 'brwacefgwpwelcomedash' ); ?>
	</div>
<?php
echo ob_get_clean();
}

// LOGIC TO ONLY SHOW WHEN ACTIVE OTHERWISE REMOVE THE WELCOME PANEL
if ( is_active_sidebar( 'brwacefgwpwelcomedash' ) ) {
remove_action( 'welcome_panel', 'wp_welcome_panel' );
add_action( 'welcome_panel', 'brwacefg_welcome_as_sidebar_widget' );
}  else {
remove_action( 'welcome_panel', 'wp_welcome_panel' );
};

// Use shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');

// User shortcodes in text widgets.
add_shortcode('user', 'brwacefghide');
function brwacefghide($atts, $content = null) {
	$defaults = array(
		'role' => '',
		'capability' => ''
	);
	extract(shortcode_atts($defaults, $atts));
	$roles = explode(',', $role); 
	if (is_user_logged_in()) {
	if (!empty($roles)) {
	foreach($roles as $role) {
	if (current_user_can($role))
	return $content;
	}
    }elseif (!empty($capability)) {
	foreach($capability as $capability) {
	if (current_user_can($capability))
	return $content;
	}
	}
}
}

