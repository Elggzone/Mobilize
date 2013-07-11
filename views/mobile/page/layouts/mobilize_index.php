<?php
/*
 *
 * Mobilize custom index
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2013, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */

if (!elgg_is_logged_in()){

	$teaserstring = elgg_get_plugin_setting('teaserstring', 'mobilize');
	$teaseroutput = elgg_get_plugin_setting('teaseroutput', 'mobilize');

	if ($teaserstring == 'file') {                
    	$content = elgg_echo("mobilize:teaser");
	} else if ($teaserstring == 'field') {
		$content = elgg_echo($teaseroutput);
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
