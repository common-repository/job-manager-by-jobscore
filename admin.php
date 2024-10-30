<?php

add_action( 'admin_init', 'wpjs_restrict_admin');
add_action( 'admin_menu', 'wpjs_admin_load_menu' );
add_action( 'wp_ajax_admin_config', 'wpjs_ajax_admin_config');

function wpjs_ajax_admin_config()
{
	$result = array();

	if (isset($_POST['action']) && current_user_can('administrator'))
	{
		$widget_opts = $_POST['widget_options'];

		update_option(WPJS_OPT_CONFIG . 'account_name', sanitize_text_field($_POST['account_name']));
		update_option(WPJS_OPT_CONFIG . 'page_id', 		sanitize_text_field($_POST['page_id']));

		foreach ($widget_opts as $option => $value) {
			if ($value && $value != "null") {
				update_option(WPJS_OPT_WIDGET . $option, sanitize_text_field($value));
			} else {
				delete_option(WPJS_OPT_WIDGET . $option);
			}
		}

		$result['permalink'] = get_permalink(sanitize_text_field($_POST['page_id']));
		$result['success'] = 1;
	}

	wp_send_json($result);

	wp_die();
}

function wpjs_admin_load_menu()
{
    add_submenu_page('options-general.php', __('JobScore Manager'), __('JobScore Manager'), 'manage_options', 'wpjs-config', 'wpjs_admin_conf');
}


function wpjs_restrict_admin()
{
	wp_register_style('wpjs_config', WPJS_URL . '/css/wpjs-config.css');
}

function wpjs_admin_conf ()
{
	wp_enqueue_style( 'wpjs_config' );

	$font_family_list = array(
		array("Arial", "Arial, Helvetica, sans-serif"),
		array("Arial Black", "Arial Black, Gadget, sans-serif"),
		array("Courier New", "Courier New, monospace"),
		array("Georgia", "Georgia, serif"),
		array("Console", "Lucida Console, Monaco, monospace"),
		array("Lucida Sans", "Lucida Sans Unicode, Lucida Grande, sans-serif"),
		array("Palatino", "Palatino Linotype, Book Antiqua, Palatino, serif"),
		array("Tahoma", "Tahoma, Geneva, sans-serif"),
		array("Times New Roman", "Times New Roman, Times, serif"),
		array("Trebuchet MS", "Trebuchet MS, sans-serif"),
		array("Verdana", "Verdana, Geneva, sans-serif")
	);

	$selected_page_id = get_option(WPJS_OPT_CONFIG . 'page_id');

	$permalink 	   = get_permalink($selected_page_id);

	$page_list	  = wp_dropdown_pages(
						array(
								'id'	=> 'page-id',
								'selected' => $selected_page_id,
								'echo'	=> FALSE
						)
					);

	$account_name = get_option(WPJS_OPT_CONFIG . 'account_name');

	wp_enqueue_style ( 'farbtastic' );
	wp_enqueue_script( 'farbtastic' );
	wp_enqueue_script( 'underscore' );

	include ( WPJS_PATH . "/views/config" . WPJS_EXT );
}
