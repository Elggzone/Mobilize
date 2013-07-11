<?php
/*
 *
 * Mobilize index
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2013, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */

if (elgg_is_logged_in()) {
	forward('activity');
}

$title = elgg_echo('mobilize:pagetitle');

//grab the login form
$login = elgg_view("core/account/login_box");

// lay out the content
$params = array(
	'login' => $login
);
$body = elgg_view_layout('mobilize_index', $params);

echo elgg_view_page($title, $body);

