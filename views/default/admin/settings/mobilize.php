<?php
/**
 * Mobilize
 */

echo "<div class=\"elggzone-options-panel\">";
	echo "<div class=\"elggzone-holder\">";
		echo "<div class=\"panel-header\">" . elgg_echo('mobilize:panel') . "</div>";
		echo "<div class=\"panel-line\"></div>";
			echo elgg_view_form('mobilize/admin/settings', array('class' => 'settings-optionspanel'));
	echo "</div>";
echo "</div>";


