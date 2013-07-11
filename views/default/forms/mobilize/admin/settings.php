<?php
/*
 *
 * Mobilize settings
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2013, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */

$plugin = elgg_get_plugin_from_id('mobilize');

if (!isset($plugin->use_friendspicker)) { $plugin->use_friendspicker = 'no'; }
if (!isset($plugin->header_color)) { $plugin->header_color = ''; }
if (!isset($plugin->showlogo)) { $plugin->showlogo = 'no'; }
if (!isset($plugin->teaserstring)) { $plugin->teaserstring = 'file'; }
if (!isset($plugin->teaseroutput)) { $plugin->teaseroutput = $teaseroutput; }

echo "<div class=\"label\">" . elgg_echo('mobilize:info:general') . "</div>";

echo '<div class="item">';
echo elgg_echo('mobilize:label:fp');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[use_friendspicker]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
		),
	'value' => $plugin->use_friendspicker,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('mobilize:label:color');
echo elgg_view('input/text', array('name' => 'params[header_color]', 'value' => $plugin->header_color, 'class' => 'ez-input-value'));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('mobilize:label:logo');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[showlogo]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
		),
	'value' => $plugin->showlogo,
));
echo '</div>';

echo "<div>" . elgg_echo('mobilize:info:message') . "</div>";

echo '<div class="item">';
echo elgg_echo('mobilize:info:teaser');
echo elgg_view('input/dropdown', array(
	'name' => 'params[teaserstring]',
	'options_values' => array(
		'file' => elgg_echo('mobilize:option:file'),
		'field' => elgg_echo('mobilize:option:field'),
		'none' => elgg_echo('mobilize:option:none')
		),
	'value' => $plugin->teaserstring,
));
echo '</div>';

echo '<div>';
	echo elgg_echo('mobilize:label:teaser');
	echo elgg_view('input/text',array('name' => 'params[teaseroutput]','value' => $plugin->teaseroutput));
echo '</div>';

echo elgg_view('input/submit', array('value' => elgg_echo("save")));
