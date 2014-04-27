<?php
/*
 *
 * Elgg Mobilize
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2014, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
elgg_register_event_handler('init','system','mobilize_init'); 

function mobilize_init(){ 

	$root = dirname(__FILE__);
	$plugin = elgg_get_plugin_from_id('mobilize');
	
	// Register libraries
	elgg_register_library("mobilize:hooks", "$root/lib/hooks.php");
	elgg_register_library("mobilize:menus", "$root/lib/menus.php");	
	
	// Register actions
	elgg_register_action("mobilize/admin/settings", "$root/actions/settings.php", 'admin');
	
	elgg_register_admin_menu_item('configure', 'mobilize', 'settings');		

	elgg_extend_view('css/admin', 'mobilize/admin');
	
	elgg_register_css('mobilize', '/css/mobilize.css');	
	elgg_register_css('style', '/css/style.css');
		
	$detect = new Mobile_Detect;
	
	if ($detect->isMobile()) {
		
		elgg_register_plugin_hook_handler('head', 'page', 'mobilize_setup_head');
		
		elgg_load_library("mobilize:hooks");
		elgg_set_viewtype('mobile');
		
		if (!elgg_is_active_plugin('custom_index')) {
			// Replace the default index page
			elgg_register_page_handler('', 'mobilize_front_page');
		} 
		
		if ($plugin->disable_friendspicker == 'yes'){	
			elgg_unregister_js('elgg.friendspicker');
		}
						
		elgg_unextend_view('input/longtext', 'tinymce/init');
		elgg_unextend_view('input/longtext', 'ckeditor/init');
		
		elgg_register_js('mobilize', 'mod/mobilize/vendors/js/mobilize.js', 'footer');
		elgg_load_js('mobilize');

		elgg_register_page_handler('about', 'mobilize_expages_page_handler');
		elgg_register_page_handler('terms', 'mobilize_expages_page_handler');
		elgg_register_page_handler('privacy', 'mobilize_expages_page_handler');
	
		elgg_register_event_handler('pagesetup', 'system', 'mobilize_pagesetup', 1000);
	}
	elgg_register_viewtype_fallback('mobile'); 
}

/**
 * Serve the front page
 * 
 * @return bool Whether the page was sent.
 */
function mobilize_front_page() {
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	return true;
}

/**
 * External pages page handler
 *
 * @param array  $page    URL segements
 * @param string $handler Handler identifier
 * @return bool
 */
function mobilize_expages_page_handler($page, $handler) {

	if ($handler == 'expages') {
		expages_url_forwarder($page[1]);
	}
	$type = strtolower($handler);

	$title = elgg_echo("expages:$type");

	$object = elgg_get_entities(array(
		'type' => 'object',
		'subtype' => $type,
		'limit' => 1,
	));
	if ($object) {
		$content .= elgg_view('output/longtext', array('value' => $object[0]->description));
	} else {
		$content .= elgg_echo("expages:notset");
	}
	$body = elgg_view_layout('one_column', array('title' => $title, 'content' => $content));
	echo elgg_view_page($title, $body);

	return true;
}

function mobilize_pagesetup() {

	$plugin = elgg_get_plugin_from_id('mobilize');

	elgg_load_library("mobilize:menus");
	
	if (!elgg_in_context('admin')) {
		if ($plugin->theme == 'default') {
			elgg_load_css('mobilize');
		} else {
			elgg_load_css('style');
		}
	}
		
	// Remove more menu dropdown
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');
			
	elgg_unextend_view('page/elements/header', 'search/header');
}
