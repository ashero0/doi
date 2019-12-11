<?php

include_once '../global.php';
$route = $_GET['route'];
$sc = new SiteController();

if ($route == 'home') {
	// Home View
	$sc->home();
}
if ($route == 'students') {
	$sc->students();
}
if ($route == 'international') {
	$sc->international();
}
if ($route == 'parents') {
	$sc->parents();
}
if ($route == 'faculty') {
	$sc->faculty();
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

	public function students() {
		$pageTitle = 'Students';
		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/information-for/students.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}

	public function international() {
		$pageTitle = 'International Students';
		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/information-for/international-students.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}

	public function parents() {
		$pageTitle = 'Parents and Families';
		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/information-for/parents.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}

	public function faculty() {
		$pageTitle = 'Faculty and Staff';
		include_once SYSTEM_PATH.'/view/header.php';
		include_once SYSTEM_PATH.'/view/information-for/faculty.php';
		include_once SYSTEM_PATH.'/view/footer.php';
	}
}