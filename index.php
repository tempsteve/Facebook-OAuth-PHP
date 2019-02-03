<?php
	// Include Facebook API
	require_once "Facebook/autoload.php";

	// Facebook API settingd
	$fb = new \Facebook\Facebook([
		'app_id' => 'Your app id',
		'app_secret' => 'Your secret key',
		'default_graph_version' => 'v2.12' // Better use the latest version
	]);
	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email']; // Your can define the scopes you want to have, email by default.
	$loginUrl = $helper->getLoginUrl('https://localhost/callback.php', $permissions); // Set the call-back page here

?>
<a href="<?=htmlspecialchars($loginUrl)?>" class='btn btn-primary'>Facebook</a>
