<?php
/*
Plugin Name: Elexicon Maintenance Plugin
Plugin URI: elexicon.com
Description: Maintenance plugin from Elexicon.
Version: 0.0.3
Author: Elexicon
Contributors: Joseph Greve
*/
// Please remember to update the version numbers in readme.txt.

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set up Updates
require 'plugin-update-checker/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/lime517/elexicon-maintenance-plugin',
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
