<?php
/*
Plugin Name: Elexicon Maintenance Plugin
Plugin URI: elexicon.com
Description: Maintenance plugin from Elexicon for Elementor-based sites.
Version: 0.0.1
Author: Joseph Greve
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set up Updates
require 'plugin-update-checker/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/lime517/elexicon-maintenance-plugin.git',
	__FILE__,
	'elexicon-maintenance-plugin' // name of repo
);

// Set branch
$updateChecker->setBranch('master');

//Enable Releases mode
$updateChecker->getVcsApi()->enableReleaseAssets();

//Optional: If you're using a private repository, specify the access token like this:
//$updateChecker->setAuthentication('');


?>
