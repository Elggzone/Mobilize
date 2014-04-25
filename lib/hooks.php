<?php
/**
 *
 * Hooks
 *
 * @package mobilize
 * 
 */
  
/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function mobilize_setup_head($hook, $type, $data) {
	
	$data['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);
	$data['metas'][] = array(
		'name' => 'apple-mobile-web-app-capable',
		'content' => 'yes',
	);
	$data['metas'][] = array(
		'name' => 'HandheldFriendly',
		'content' => 'true',
	);
	$data['links'][] = array(
		'rel' => 'apple-touch-icon',
		'href' => elgg_normalize_url('mod/mobilize/graphics/homescreen.png'),
	);

	return $data;
}