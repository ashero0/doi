<?php

include_once '../global.php';
$route = $_GET['route'];
$sc = new SiteController();

if ($route == 'home') {
	// Home View
	$sc->home();
}
elseif ($route == 'about-contact-us') {
	// About / Contact Us
	$sc->aboutContactUs();
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

	/*-- About / Contact Us --- */
	public function aboutContactUs() {
		$pageTitle = 'Contact Us';

		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/about/contact-us.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}