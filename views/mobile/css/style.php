<?php
/*
 *
 * Mobilize CSS
 *
 * @package mobilize
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2014, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
$plugin = elgg_get_plugin_from_id('mobilize');

?>
/* <style> /**/

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
body {
	font-size: 100%;
}
a {
	color: #5097CF;
}
select {
	font-size: 85%;
}
/***** BUTTONS ******/
.elgg-button {
	color: #FFF;
	border-radius: 3px;
	width: auto;
	padding: 6px 12px !important;
	box-shadow: none;
	background: #4787B8;
	border: none;
	
	-webkit-appearance: none;
    -webkit-border-radius: 3px;
	border-radius: 3px;
		
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-button-action {	
	background: #4787B8;
	border: none;
	text-decoration: none;
	text-shadow: none;
	cursor: pointer;
}
.elgg-button-action:hover,
.elgg-button-action:focus {
	border-radius: 3px;
	color: #FFF;
	background: #60B6F7;
	border: none;
}
.elgg-button-submit {
	color: #FFF;
	text-shadow: none;
	text-decoration: none;
	border: none;
	background: #4787B8;
}
.elgg-button-submit:hover,
.elgg-button-submit:focus {
	border: none;
	text-decoration: none;
	color: #FFF;
	background: #60B6F7;
}
.elgg-form-login .elgg-button-submit,
.elgg-form-register .elgg-button-submit {
	padding: 9px 12px !important;
	width: 100%;
	margin-top: 10px;
}
.elgg-button-cancel {
	border: none;
	background: #FAA51A;
}
.elgg-button-cancel:hover,
.elgg-button-cancel:focus {
	color: #FFF;
	background: #E38F07;
	text-decoration: none;
}
.elgg-button-delete {
	border: none;
	background: #FF3300;
}
.elgg-button-delete:hover,
.elgg-button-delete:focus {
	background: #D63006;
}
.elgg-form-login .float-alt {
	float: left;
}
.messages-buttonbank .elgg-button {
	padding: 9px 12px !important;
	margin: 10px 0 0;
	width: 100%;	
}
.profile-action-menu .elgg-button-action {
	width: 100%;
}
/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 20px 0 10px;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	text-align: center;
	margin-left: -1px;
}

.elgg-pagination a,
.elgg-pagination span {
	display: inline-block;
	padding: 8px 18px;
	color: #222;
	background-color: #F0F0F0;
	border: 1px solid #DCDCDC;
}
.elgg-pagination a:focus,
.elgg-pagination a:hover {
	color: #999;
	background-color: #FFF;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #407CC2;
	background: #FFF;
	border: 1px solid #DCDCDC;
}
/* ***************************************
	TABS - FILTER MENU
*************************************** */
.elgg-tabs,
.elgg-menu-filter {
	display: table;
	table-layout: fixed;
	text-align: center;
	background-color: #F0F0F0;
    border-color: #DCDCDC;
    border-style: solid;
    border-width: 1px 0 1px 1px;
	margin-bottom: 10px;
	width: 100%;
	height: auto;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-tabs li,
.elgg-menu-filter > li {
	display: table-cell;
    vertical-align: top;
	float: none;
	background: none;
	border: none;
}
.elgg-tabs a,
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
    padding: 12px;
	text-align: center;
	color: #222;
    border-color: #DCDCDC;
    border-style: solid;
    border-width: 0 1px 0 0;
}
.elgg-tabs a:hover,
.elgg-menu-filter > li > a:hover {
	background: #ECECEC;
	color: #407CC2;
}
.elgg-tabs .elgg-state-selected {
	border-color: #DCDCDC;
	background: #FFF;
}
.elgg-menu-filter > li.elgg-state-selected a:hover {
	background: #FFFFFF;
}
.elgg-tabs .elgg-state-selected a,
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	color: #407CC2;
	background: #FFF;
	top: 0;
}
/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}
.elgg-menu-page a {
	color: #222;
	border-color: #DCDCDC;
    border-style: solid;
    border-width: 0 1px 1px 1px;
	display: block;
	border-radius: 0;	
	background-color: white;
	margin: 0;
	padding: 8px 20px;
}
.elgg-menu-page li:first-child a {
    border-top-width: 1px;
}
.elgg-menu-page a:hover {
	background-color: #F0F0F0;
	color: #222;
	text-decoration: none;
}
.elgg-menu-page li.elgg-state-selected > a {
	background-color: #F0F0F0;
	color: #222;
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
.elgg-river-responses .elgg-form {
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
	border: 1px solid #DCDCDC;
	float: left;
    padding: 20px;
}
.groups-profile-fields .odd,
.groups-profile-fields .even {
	background: transparent;
	padding: 0;
}
#groups-tools > li {
	width: auto;
	float: none;
	min-height: 0;
	margin-bottom: 10px;
}
#groups-tools > li:nth-child(odd) {
	margin-right: 0;
}
.groups-stats {
	background: transparent;
	padding: 0 0 10px 0;
    margin-bottom: 5px;
}
/***** HEADER ******/
.elgg-page-header > .elgg-inner h1 {	
	display: inline-block; 
	vertical-align: top;
}
.elgg-heading-site, .elgg-heading-site:hover {
    position: relative;
    line-height: 1;
    font-weight: normal;
    font-style: normal;    
	font-size: 1.2em;
	padding-left: 10px;
}
.elgg-heading-site img {
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
	position: relative;
	float: right;
	display: table-cell;
	padding: 5px 0 0 10px; 
}
.elgg-page-header .elgg-menu-site-default select {
    height: 24px;
	margin-right: 10px;
}
.elgg-menu-hover {
	width: 200px;
}
.elgg-breadcrumbs {
	font-size: 100%;
    font-weight: normal;
	line-height: 1.4em;
    background: #EEE;
    padding: 8px 10px;
}
.elgg-main .elgg-breadcrumbs {
	margin: -4px 0 5px 0;
}
.elgg-breadcrumbs > li > a {
	color: #555;
}
.elgg-breadcrumbs > li:after {
	color: #555;
}
/***** ADMIN OPTIONS MENU ******/
.profile-admin-menu-wrapper {
	float: left;
	background: transparent;
	width: 100%;
}
.profile-admin-menu-wrapper a {
	display: block;
	color: #222;
	border-color: #DCDCDC;
    border-style: solid;
    border-width: 0 1px 1px 1px;
	border-radius: 0;
	padding: 8px 20px;
	margin: 0;
}
.profile-admin-menu-wrapper li a {
	color: #FF0000;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	background-color: #F0F0F0;
	color: #000;
}
/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */
#friends_collections_accordian li {
	color: #222;	
}
#friends_collections_accordian li h2 {
	border-radius: 0;
	background: #F0F0F0;
	border: 1px solid #DCDCDC;
	color: #222;
	cursor: pointer;
	font-size: 1.2em;
	margin: 10px 0;
	padding: 10px;
}
#friends_collections_accordian li h2:hover {
	background-color: #E5E5E5;
}
/* ***************************************
	MODULES
*************************************** */
.elgg-module {
	padding: 1px;
	overflow: hidden;
	margin-bottom: 20px;
	border: 1px solid #DCDCDC;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-module > .elgg-body {
	padding: 10px 20px 20px;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-module-featured {	
	border-radius: 0;
}
.elgg-module-featured > .elgg-head,
.elgg-module-aside .elgg-head,
.elgg-module-info > .elgg-head {
	background: #F0F0F0;
	border-bottom: 1px solid #DCDCDC;
	padding: 8px 20px;
	margin-bottom: 10px;
	border-radius: 0;
}
.elgg-module-featured > .elgg-head h3,
.elgg-module-aside .elgg-head h3,
.elgg-module-info > .elgg-head h3 {
	color: #222;
}
.elgg-module-index {
	padding: 0;
	border: none;
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
/***** WIDGETS ******/
.elgg-module-widget {
	background-color: transparent;
	padding: 1px;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: transparent;
}
.elgg-module-widget > .elgg-body {
	background-color: white;
	border-top: 1px solid #DCDCDC;
	padding: 10px;
}
.elgg-module-widget > .elgg-head {
	background-color: #F0F0F0;
	height: auto;
	padding: 8px 20px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 45px 0 0;
	color: #222;
}
.elgg-col-2of3,
#elgg-widget-col-1,
#elgg-widget-col-2,
#elgg-widget-col-3 {
	width: 100%;
	min-height: 0 !important;
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
/***** OWNER BLOCK ******/
.elgg-owner-block {
	padding: 0;
	border: none;
	margin-bottom: 10px;
}
.elgg-owner-block > .elgg-body {
	padding: 0;
}
#profile-owner-block .elgg-menu-owner-block select {
	float: left;
    margin: 10px 0;
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
/***** DEFAULT LAYOUT ******/
.elgg-page-default {
	width: auto;
	min-width: 0;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 100%;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: auto;
	padding: 5px 10px;
}
.elgg-page-topbar {
	display: none;
}
.elgg-menu-footer-alt,
.elgg-menu-footer-meta,
.elgg-menu-footer-default {
    display: block;
    float: none;
    text-align: center;
}
/***** MESSAGES ******/
.messages-container .elgg-list {
	border-top: none;
}
.messages-container ul li {
	border-color: #DCDCDC;
    border-style: solid;
    border-width: 0 1px 1px 1px;

	padding: 8px 20px;
}
.messages-container ul li:first-child {
    border-top-width: 1px;
}
.messages-container ul li:nth-child(odd) {
	background-color: #F0F0F0;
}
.messages-container ul li:nth-child(even) {
	background-color: #F9F9F9;
}
/***** SYSTEM MESSAGES ******/
.elgg-message {
	color: white;
	font-weight: normal;
	display: block;
	padding: 10px;
	cursor: pointer;
	opacity: 0.9;	
    text-align: center;
	box-shadow: none;
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
	background: <?php echo $plugin->header_color; ?>;
	padding: 20px 10px;
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
    padding-bottom: 20px;
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