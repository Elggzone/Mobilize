<?php
/**
 * Elgg mobilize CSS
 *
 * @package mobilize
 * 
 */
?>

html {
    -webkit-text-size-adjust: none;
}
body {
	font-size: 100%;
}
select {
	font-size: 85%;
}
.embed-wrapper {
	width: auto;
	margin: 0;
}
.elgg-module-index {
	padding: 10px;
	max-width: 450px;
    margin: 0 auto;
}
.elgg-module-index > .elgg-head > h3{
	padding: 20px 0;
	text-align: center;    
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
/***** DASHBOARD ******/
.mobile-dashboard {
	margin-top: -10px;
}
/***** FILE - IMG ******/
.elgg-photo {
	max-width: 97%;
}
.elgg-menu-title li.elgg-menu-item-download {
	display: none;
}
.file-photo {
	margin-top: 15px;
}
.elgg-output img {
	height: auto;
}
/***** FORMS ******/
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
/***** GRID ******/
.elgg-col-2of3 {
	width: auto;
    height: auto;
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
/***** HEADER ******/
.elgg-heading-site, .elgg-heading-site:hover {
    position:absolute; 
    line-height: 60px;
    font-weight:normal;
    font-style:normal;    
	font-size: 1.2em;
    left: 10px;
    width: auto;
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
/***** MODULES ******/
.elgg-likes {
	width: auto;
}
.elgg-module-popup {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.elgg-owner-block {
	margin-bottom: 10px;
}
/***** OWNER BLOCK ******/
#profile-owner-block .elgg-menu-owner-block select {
	float: left;
    margin-left: 10px;
}
.profile-admin-menu-wrapper {
	float: left;
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
.elgg-menu-footer-alt,
.elgg-menu-footer-default {
    display: block;
    float: none;
    text-align: center;
}
/***** TOPBAR ******/
.elgg-page-topbar {
	display: none;
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
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: none;
}
.elgg-layout-two-sidebar {
	background: none;
}
.elgg-layout-one-column {
	width: auto;
	padding: 10px 0;
}
.elgg-sidebar {
	display: none;
}
.elgg-sidebar-alt {
	display: none;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	margin-bottom: 10px;
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