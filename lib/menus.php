<?php
/**
 *
 * Set up menu items
 *
 * @package mobilize
 * 
 */

elgg_unregister_menu_item('footer', 'report_this');

// Extend footer with copyright
$year = date('Y');
$href = "http://www.perjensen-online.dk";
elgg_register_menu_item('footer', array(
	'name' => 'copyright_this',
	'href' => $href,
	'title' => elgg_echo('mobilize:tooltip'),
	'text' => elgg_echo('mobilize:copyright') . $year . elgg_echo(' Elggzone'),
	'priority' => 1,
	'section' => 'meta',
));

if (elgg_is_active_plugin('dashboard')) {
	$item = elgg_unregister_menu_item('topbar', 'dashboard');
	if ($item) {
		$item->setText(elgg_echo('dashboard'));
		$item->setSection('default');
		elgg_register_menu_item('site', $item);
	}
}
	
if (elgg_is_logged_in()) {		

	$item = elgg_unregister_menu_item('topbar', 'logout');
	if ($item) {
		$item->setText(elgg_echo('logout'));
		$item->setSection('alt');
		elgg_register_menu_item('footer', $item);
	}
	
	$item = elgg_unregister_menu_item('topbar', 'usersettings');
	if ($item) {
		$item->setText(elgg_echo('settings'));
		$item->setSection('alt');
		elgg_register_menu_item('footer', $item);
	}
	
	$item = elgg_unregister_menu_item('topbar', 'friends');
	if ($item) {
		$item->setText(elgg_echo('friends'));
		elgg_register_menu_item('site', $item);
	}
				
	if (elgg_is_active_plugin('profile')) {
		$item = elgg_unregister_menu_item('topbar', 'profile');
		if ($item) {
			$item->setText(elgg_echo('profile'));
			elgg_register_menu_item('site', $item);
		}
	}
	
	if (elgg_is_active_plugin('messages')) {
		$item = elgg_unregister_menu_item('topbar', 'messages');
		$num_messages = (int)messages_count_unread();
		if ($num_messages != 0) {
			$text .= "<span class=\"messages-new\">$num_messages</span>";
		}
		if ($item) {
			$item->setText(elgg_echo('messages') . $text);
			$item->setSection('default');
			elgg_register_menu_item('site', $item);
		}
	}
}	

if (elgg_is_admin_logged_in()) {
	$item = elgg_unregister_menu_item('topbar', 'administration');
	if ($item) {
		$item->setText(elgg_echo('admin'));
		$item->setSection('alt');
		elgg_register_menu_item('footer', $item);
	}
}
