<?php
/*
 *
 * Mobilize CSS
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2013, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */
?>

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
body {
	font-size: 100%;
}
select {
	font-size: 85%;
}
/***** BUTTONS ******/
.messages-buttonbank .elgg-button {
	background: none;
	border: none;
	text-shadow: none;
	color: #4690D6;
        
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.messages-buttonbank .elgg-button:hover {
	color: #555555;
}
.elgg-button-action {
	color: #4690D6;
	background: none;
	border: none;
	padding: 2px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	text-shadow: none;
	cursor: pointer;
	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.elgg-button-action:hover,
.elgg-button-action:focus {
	color: #555555;
	background: none;
	text-decoration: none;
	border: none;
}
/***** CUSTOM INDEX ******/
.elgg-col-1of2 {
	width: 100%;
}
.prl {
	padding-right: 0;
}
/***** MISC ******/
.embed-wrapper {
	width: auto;
	margin: 0;
}
.mobile-dashboard {
	margin-top: -10px;
}
.elgg-col-2of3 {
	width: auto;
    height: auto;
}
.elgg-likes {
	width: auto;
}
.elgg-menu-title li.elgg-menu-item-download {
	display: none;
}
/***** IMG ******/
.elgg-photo {
	max-width: 97%;
}
.file-photo {
	margin-top: 15px;
}
.elgg-output img {
	height: auto;
}
.elgg-image-block {
	padding: 10px 0;
}
.elgg-image-block .elgg-image {
	margin-right: 8px;
}
.tidypics-gallery-widget > li {
	width: auto;
    margin: 5px 10px;
}
/***** FORMS ******/
.elgg-form-register,
.elgg-form-user-requestnewpassword {
	max-width: 450px;
    margin: 0 auto;
}
.elgg-river-responses .elgg-form{
	float: left;
    width: 100%;
    height: auto;
}
.elgg-river-responses .elgg-form .elgg-input-text {
	margin-bottom: 5px;
    margin-right: 10px;
}
.elgg-river-responses .elgg-form .elgg-button {
    margin-left: 0;
}
/***** GROUPS ******/
.groups-profile-fields {
	float: left;
    padding-left: 0;
}
.groups-profile-fields .odd,
.groups-profile-fields .even {
	padding: 0;
}
#groups-tools > li {
	width: auto;
	float: none;
	margin-bottom: 10px;
}
#groups-tools > li:nth-child(odd) {
	margin-right: 0;
}
.groups-stats {
    margin-bottom: 5px;
}
/***** HEADER ******/
.elgg-heading-site, .elgg-heading-site:hover {
    position:absolute; 
    line-height: 60px;
    font-weight:normal;
    font-style:normal;    
	font-size: 1.2em;
    left: 10px;
    width: auto;
	z-index: 100;
}
.elgg-heading-site img {
    display: block;
	position: relative;
    float: left;
	margin: 0 auto;
    padding-top: 10px;
    height: auto;
    width: auto;
}
/***** ICONS ******/
.elgg-icon-hover-menu:hover {
	background: transparent url(<?php echo elgg_get_site_url();?>mod/mobilize/graphics/avatar_menu_arrows.png) no-repeat;
    background-position: right bottom;
    width: 100%;
    height: 100%;
}
.elgg-icon-hover-menu {
	background: transparent url(<?php echo elgg_get_site_url();?>mod/mobilize/graphics/avatar_menu_arrows.png) no-repeat;
    background-position: right bottom;
    width: 100%;
    height: 100%;
}
/***** MENU ******/
.elgg-menu-longtext .elgg-menu-item-tinymce-toggler a {
	display: none;
}
.elgg-menu-entity {
	vertical-align: right;
    float: right;    
	height: auto;
}
.elgg-menu-entity li {
	vertical-align: right;
    float: right;    
}
.elgg-menu-page-default li{
	display: none;
}
.elgg-menu-page-default {
	display: block;
    height: 24px;
    margin-bottom: 10px;    
}
.elgg-menu-page-default select {
    position: relative;
    float: right; 
    top: 0; 
    height: 24px; 
    right: 0;
    margin-bottom: 10px;
}
.profile-action-menu {
	margin-bottom: 0;
}
.elgg-menu-owner-block-default li{
	display: none;
}
.elgg-menu-owner-block-default select {
    position: relative;
    float: right; 
    top: 0; 
    height: 24px; 
    right: 0;
    margin-bottom: 10px;
}
.elgg-menu-site li{
	display: none;
}
.elgg-menu-site-default {
    position:absolute; 
    top:50%; 
    height: 24px; 
    margin-top:-12px;
    right: 3px;
}
.elgg-page-header .elgg-menu-site-default select {
    position:absolute; 
    top:50%; 
    height: 24px; 
    margin-top:-12px;
    right: 3px;
}
.elgg-menu-hover {
	width: 200px;
}
.elgg-breadcrumbs {
	font-size: 100%;
    font-weight: normal;
	line-height: 1.4em;
    background: #EEE;
    padding: 5px 10px;
}
.elgg-main .elgg-breadcrumbs {
	margin: -4px -10px 5px -10px;
}
.elgg-breadcrumbs > li > a {
	color: #555;
}
.elgg-breadcrumbs > li:after {
	color: #555;
}
/***** MODULES ******/
.elgg-module-index {
	padding: 10px;
	max-width: 450px;
    margin: 0 auto;
}
.elgg-module-index > .elgg-head > h3{
	padding: 20px 0;
	text-align: center;    
}
.elgg-module-popup {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
/***** OWNER BLOCK ******/
.elgg-owner-block {
	margin-bottom: 10px;
}
#profile-owner-block .elgg-menu-owner-block select {
	float: left;
    margin-left: 10px;
}
.profile-admin-menu-wrapper {
	float: left;
}
.elgg-owner-block .elgg-image-block {
	display: none;
}
/***** PROFILE ******/
#profile-owner-block {
	width: auto;
}
#profile-details {
    display: block;
	float: left;
}
.profile .elgg-inner {
	margin: 0;
}
/***** WIDGETS ******/
.elgg-col-2of3,
#elgg-widget-col-1,
#elgg-widget-col-2,
#elgg-widget-col-3 {
	width: 100%;
	min-height: 0 !important;
}
.elgg-module-widget {
	margin: 0 0 15px;
}
.elgg-module-widget .elgg-icon-delete-alt {
	display: none;
}
a.elgg-widget-collapse-button:before {
	display: none;
}
.elgg-module-widget .elgg-icon-settings-alt {
	display: none;
}
.elgg-module-widget > .elgg-head h3 {
	padding-left: 10px;
}
.elgg-module-widget {
	margin: 0 0 15px;
}
/***** DEFAULT LAYOUT ******/
.elgg-page-default {
	width: auto;
	min-width: 0;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: auto;
	margin: 0 auto;
	height: 60px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: auto;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: auto;
	margin: 0 auto;
	padding: 5px 10px;
}
.elgg-page-topbar {
	display: none;
}
.elgg-menu-footer-alt,
.elgg-menu-footer-default {
    display: block;
    float: none;
    text-align: center;
}
/***** SYSTEM MESSAGES ******/
.elgg-message {
	color: white;
	font-weight: bold;
	display: block;
	padding: 10px;
	cursor: pointer;
	opacity: 0.9;	
    text-align: center;
    
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.elgg-state-success {
	background: #659765;
}
.elgg-state-error {
	background: #FF0000;
}
.elgg-state-notice {
	background: #659765;
}
.elgg-system-messages {
	position: fixed;
	top: 0;
	right: 0;
    width: 100%;
	max-width: 100%;
	z-index: 99999;
}
.elgg-system-messages li {
	margin-top: 0;
}
/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE BODY LAYOUT ******/
.elgg-layout-one-sidebar {
	background: none;
	width: 100%;
    float: left;
}
.elgg-layout-two-sidebar {
	background: none;
}
.elgg-layout-one-column {
	width: auto;
	padding: 10px 0;
}
/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
    padding-bottom:20px;
}
/***** FRIENDSPICKER OFF ******/
.friends-picker-container h3 {
	font-size: 1.2em !important;
}
/*** WALLED ***/
.elgg-body-walledgarden {
	margin: 50px auto 0 auto !important;
	max-width: 100% !important;
}
.elgg-heading-walledgarden {
	margin-top: 0 !important;
}
.elgg-heading-walledgarden br {
	display: none !important;
}
.elgg-module-walledgarden .elgg-form {
	max-width: 100% !important;
}
.elgg-menu-walled-garden {
	margin: 10px 0 !important;
}
.elgg-module-walledgarden .elgg-col .elgg-inner {
	margin: 0 !important;
}
.elgg-walledgarden-double > .elgg-head,
.elgg-walledgarden-double > .elgg-body,
.elgg-walledgarden-double > .elgg-foot,
.elgg-walledgarden-single > .elgg-head,
.elgg-walledgarden-single > .elgg-body,
.elgg-walledgarden-single > .elgg-foot {
	background: transparent !important;
}