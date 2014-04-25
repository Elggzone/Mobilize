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
	
	// Register libraries
	elgg_register_library("mobilize:hooks", "$root/lib/hooks.php");
	elgg_register_library("mobilize:menus", "$root/lib/menus.php");

	// Register actions
	elgg_register_action("mobilize/admin/settings", "$root/actions/settings.php", 'admin');
	
	elgg_register_admin_menu_item('configure', 'mobilize', 'settings');		

	elgg_extend_view('css/admin', 'mobilize/admin');
	
	elgg_register_page_handler('about', 'mobilize_expages_page_handler');
	elgg_register_page_handler('terms', 'mobilize_expages_page_handler');
	elgg_register_page_handler('privacy', 'mobilize_expages_page_handler');

	elgg_register_css('elgg.mobilize', '/css/mobilize.css');
		
	$detect = new Mobile_Detect;
		
	if ($detect->isMobile()) {
	
		elgg_register_plugin_hook_handler('head', 'page', 'mobilize_setup_head');
		
		elgg_load_library("mobilize:hooks");
		elgg_set_viewtype('mobile');
		
		if (!elgg_is_active_plugin('custom_index')) {
			elgg_unregister_plugin_hook_handler('index','system','custom_index');
			elgg_register_plugin_hook_handler('index', 'system', 'index_handler');
		} 
		
		if (elgg_get_plugin_setting('use_friendspicker', 'mobilize') == 'yes'){			
			elgg_unregister_js('elgg.friendspicker');
		}
						
		elgg_unextend_view('input/longtext', 'tinymce/init');
		
		elgg_register_js('mobilize', 'mod/mobilize/vendors/js/mobilize.js', 'footer');
		elgg_load_js('mobilize');

		elgg_register_event_handler('pagesetup', 'system', 'mobilize_pagesetup', 1000);
	}
	elgg_register_viewtype_fallback('mobile'); 
}

function index_handler($hook, $type, $return, $params) {

	if ($return == true) {
		// another hook has already replaced the front page
		return $return;
	}
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}
	// return true to signify that we have handled the front page
	return true;
	
}

function mobilize_expages_page_handler($page, $handler) {

	if ($handler == 'expages') {
		expages_url_forwarder($page[1]);
	}
	$type = strtolower($handler);

	$title = elgg_echo("expages:$type");
	$content = elgg_view_title($title);

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
	$body = elgg_view_layout('one_sidebar', array('content' => $content));
	echo elgg_view_page($title, $body);

	return true;
}

function mobilize_pagesetup() {

	elgg_load_library("mobilize:menus");
	
	if (!elgg_in_context('admin')) {
		elgg_load_css('elgg.mobilize');
	}
		
	// remove more menu dropdown
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
			
	elgg_unextend_view('page/elements/header', 'search/header');
}
