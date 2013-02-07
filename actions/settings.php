<?php
/**
 * Mobilize settings save
 */

$plugin = elgg_get_plugin_from_id('mobilize');

$params = get_input('params');
foreach ($params as $k => $v) {
	if (!$plugin->setSetting($k, $v)) {
		register_error(elgg_echo('plugins:settings:save:fail', array('mobilize')));
		forward(REFERER);
	}
}

foreach ($params as $name => $value) {
	$plugin->setSetting($name, $value);
}

system_message(elgg_echo('plugins:settings:save:ok', array('mobilize')));
forward(REFERER);
