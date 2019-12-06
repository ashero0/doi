<?php

include_once '../global.php';
$route = $_GET['route'];
$sc = new SiteController();

if ($route == 'home') {
	// Home View
	$sc->home();
}

class SiteController {

	/* --- Home View --- */
	public function home() {
		$pageTitle = 'Home';
		// $stylesheet = 'home';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/home.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}