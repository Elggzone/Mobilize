<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$logo_url = $site_url . "mod/mobilize/graphics/logo.png";

$plugin = elgg_get_plugin_from_id('mobilize');

if ($plugin->showlogo == 'yes'){

?>

<a class="elgg-heading-site" href="<?php echo $site_url; ?>"><img src="<?php echo $logo_url; ?>" alt="<?php echo $site_name; ?>" /></a>

<?php } else { ?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
</h1>

<?php

}