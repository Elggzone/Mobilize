<?php
/*
 *
 * Mobilize custom index
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2014, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */

if (!elgg_is_logged_in()){
	
	$plugin = elgg_get_plugin_from_id('mobilize');

	if ($plugin->teaserstring == 'file') {                
    	$content = elgg_echo("mobilize:teaser");
	} else if ($plugin->teaserstring == 'field') {
		$content = elgg_echo($plugin->teaseroutput);
	} else {
		//
	}

	$mod_params = array('class' => 'elgg-module-highlight');
	
	// Top box for login	
	$top_box = $vars['login'];
	
	echo elgg_view_module('index',  $content, $top_box, $mod_params);

} else {	
	forward('activity');
}
